<?php namespace dg\Pays\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Countries extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'countries' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('dg.Pays', 'pays');
    }
}
