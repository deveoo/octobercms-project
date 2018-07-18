<?php namespace RamziBenzina\Bandeau\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Bandeau extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'ramzibenzina.bandeau.gerer' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('RamziBenzina.Bandeau', 'bandeau', 'images');
    }
}
