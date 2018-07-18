<?php namespace dg\ProduitEtServices\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Produits extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'Produit' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('dg.ProduitEtServices', 'main-menu-item', 'produits-services');
    }
}
