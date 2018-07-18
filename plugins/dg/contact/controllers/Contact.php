<?php namespace dg\Contact\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Contact extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'contact' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('dg.Contact', 'Contact');
    }
}
