<?php namespace dg\Emploi\Models;

use Model;

use dg\Pays\Models\Countries;

/**
 * Model
 */
class Offres extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

  /*  public $hasOne = [
        'pays' => ['dg\Pays\Models\Countries', 'key' => 'id'] ,
    ];*/

    public function getPaysIdOptions()
    {
      $contries = new Countries();
        return $contries->orderBy('titre')->lists('titre', 'id');
    }

     /*public $hasOne = [
         'Categories' => ['dg\ProduitEtServices\Models\Categories', 'key' => 'titre'] ,
     ];*/

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dg_emploi_offres';

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['titre', 'description', 'extrait' , 'slug' ];
}
