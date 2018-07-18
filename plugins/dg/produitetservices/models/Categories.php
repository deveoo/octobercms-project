<?php namespace dg\ProduitEtServices\Models;

use Model;

/**
 * Model
 */
class Categories extends Model
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
    public $table = 'dg_produitetservices_categories';

  /*  public function getIdParentOptions(){

  }*/

  /*public function getIdParentOptions(){
    return [

    ];
  }*/

  /*
    *
    */
   public function getIdParentOptions()
   {
       return $this->orderBy('titre')->lists('titre', 'id');
   }

    public $hasOne = [
        'Categories' => ['dg\ProduitEtServices\Models\Categories', 'key' => 'titre'] ,
    ];

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['titre', 'description', 'id_parent' , 'slug' ];


}
