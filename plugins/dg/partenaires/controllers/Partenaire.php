<?php namespace dg\Partenaires\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Partenaire extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'dg.partenaire.gerer_partenaire' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('dg.Partenaires', 'paretenaires', 'partenaire');
    }
}
