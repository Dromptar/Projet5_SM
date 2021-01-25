<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
		'my_list' => '_errors_list',
	];

	//--------------------------------------------------------------------
	// Rules
	//-------



    public $signup = [
		
        'username' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'You must choose a Username.'
            ]
		],
		'password' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'You must choose a Password.'
            ]
		],
		'pass_confirm' => [
            'rules'  => 'required|matches[password]',
            'errors' => [
                'required' => 'The password are differents.'
            ]
        ],
        'email'    => [
            'rules'  => 'required|valid_email',
            'errors' => [
                'valid_email' => 'Please check the Email field. It does not appear to be valid.'
            ]
        ],
	];
	
}
