<?php namespace App\Controllers;

use App\Models\BlogModel;

class Home extends BaseController
{
	
	// function to display the 3 last post of the blog
	public function index()
	{
		$model = new BlogModel();
		$limit = 3;
		$data['posts'] = $model ->orderBy('post_created_at', 'desc')
								->findAll($limit);

		return view('home', $data);
	}

	public function about()
	{
		return view('about');
	}

	// functions tips and recipeSearch, redirect to pages, availables only with an user account
	public function tips()
	{
		if(isset($_SESSION['userSession'])) {
		return view('tips');
		} else {
		return view('connection');
		}
	}

	public function recipeSearch()
	{
		if(isset($_SESSION['userSession'])) {
		return view('recipe_search');
		} else {
		return view('connection');
		}
	}

	public function gallery()
	{
		return view('gallery');
	}

	public function contact()
	{
		return view('contact');
	}

	

}
