<?php namespace dg\Postuler\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Postuler extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController' , 'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
	public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'postuler' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('dg.Postuler', 'postuler');
    }
}
