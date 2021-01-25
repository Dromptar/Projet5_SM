<?php

namespace App\Controllers;



use App\Models\UsersModel;



class Admin extends BaseController

{



    public function index()
    {
        
        return view('index');
    }

    // redirect to the admin section
    public function adminSpace()
    {
        if(isset($_SESSION['admin'])) {
        return view('admin-space');
        } else {
            return view('connection');
            }
    }


    // function in charge to manage the mail from user to the admin
    public function mailto()
    {

        $to = getenv('SMTPUser');
        $subject = 'Tienes un mensaje de un alumno';
        $message = $_POST['message'];

        $email = \Config\Services::email();

        $email->setFrom($_POST['usermail'], $_POST['username']);
        $email->setTo($to);
        $email->setSubject($subject);
        $email->setMessage($message);

        //$email->setCC('another@another-example.com');
        //$email->setBCC('them@their-example.com');

        //var_dump($email);
        //die();

        if ($email->send(false)) {

            //echo 'Correo enviado';
            echo "<script>alert(\"'Su mensaje ha sido enviado con éxito.\")</script>";
            return view('contact');
        } else {

            echo $email->printDebugger();
        }  
    }

    // function in progresss, to offer to the admin the possibilty to manage users 
    public function membersList() {

        $model = new UsersModel();
		$data['members'] = $model->orderBy('registed_at', 'desc')
			->findAll();
        /*var_dump($data['members']);
        die();*/
		return view('members-list', $data);
    }
}



	//--------------------------------------------------------------------
