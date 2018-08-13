<?php namespace dg\Fournisseurs\Models;

use Model;

/**
 * Model
 */
class Suppliers extends Model
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
    public $table = 'dg_fournisseurs_suppliers';

    /***** Ramzi BENZINA *****/

    /* Relations */
    public $attachOne = [
        'image' => 'System\Models\File',
        'image2' => 'System\Models\File'
    ];

    public $belongsTo = [
      'user' => ['RainLab\User\Models\User']
    ];

    public static function getFromUser($user){
      /*if ($user->groups[0]->id == 3 ) echo 'OK';
      exit;*/
      if($user->supplier)
        return $user->supplier;

      if ($user->groups[0]->id != 3 )
        return;

        $supplier = new static;
        $supplier->user = $user;

        $supplier->save();

        $user->supplier = $supplier;

        return $supplier;
    }

    /* Relations */

    public function getPaysOptions() {
      return array('Algérie' => 'Algérie', 'Libye' => 'Libye' ,'Maroc' => 'Maroc','Tunisie' => 'Tunisie' );
    }

    /** Get Active suppliers **/
    public static function getActiveSuppliers(){
      return Suppliers::where('activated', '=', '1')
        ->paginate(1);
    }

    /** Get Active suppliers **/
    public static function getCurrentSupplier($userId){
      return Suppliers::where('user_id', '=', $userId)->first();
    }


}
