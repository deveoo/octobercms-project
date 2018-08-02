<?php namespace dg\DocumentsUtiles\Models;

use Model;

/**
 * Model
 */
class Documents extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;


    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */

     /* Relations */

  /*   public function getPaysIdOptions()
     {
         return $this->orderBy('titre')->lists('titre', 'id');
     }*/

     /*public $hasOne = [
          'Categories' => ['dg\ProduitEtServices\Models\Categories', 'key' => 'titre'] ,
      ];*/

      public $hasOne = [
          'pays' => ['dg\Pays\Models\Countries', 'key' => 'id'] ,
      ];
    /* public $hasOne = [
       'pays_id' => [
           'dg\Pays\Models\Countries',
           'table' => 'dg_pays_countries',
           'order' => 'titre',
           'key' => 'id'
       ],
    ];*/

     public $attachOne = [
         'document' => 'System\Models\File',

     ];

    public $table = 'dg_documentsutiles_docs';
    public $translatable = ['titre', 'description' ];
}
