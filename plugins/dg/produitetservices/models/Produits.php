<?php namespace dg\ProduitEtServices\Models;

use Model;

/**
 * Model
 */
class Produits extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;
  //  use \October\Rain\Database\Traits\Sortable;
  //  use \October\Rain\Database\Traits\NestedTree;

    protected $dates = ['deleted_at'];


    public function reorderExtendQuery($query)
    {
        $query->withTrashed();
    }

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dg_produitetservices_produits';

    /* Relations */
    public $belongsToMany = [
        'categorie' => [
            'dg\ProduitEtServices\Models\Categories',
            'table' => 'dg_produitetservices_prod_cat',
            'order' => 'titre'
        ],

        'fournisseurs' => [
            'dg\Fournisseurs\Models\Suppliers',
            'table' => 'dg_produitetservices_produit_fournisseur',
            'order' => 'titre'
        ]

      /*  'pays' => [
            'dg\Pays\Models\Countries',
            'table' => 'dg_produitetservices_produit_fournisseur',
            'order' => 'titre'
        ]*/
    ];

    public $attachOne = [
        'image' => 'System\Models\file'
    ];


    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['titre', 'description', 'extrait' , 'slug' ];



}
