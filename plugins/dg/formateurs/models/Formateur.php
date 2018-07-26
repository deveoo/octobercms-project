<?php namespace dg\Formateurs\Models;

use Model;

/**
 * Model
 */
class Formateur extends Model
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
    public $table = 'dg_formateurs_liste';

    /* Relations */
    public $attachOne = [
        'image' => 'System\Models\File',
        'cv' => 'System\Models\File',
    ];


    public $belongsTo = [
      'user' => ['RainLab\User\Models\User']
    ];

    public static function getFromUser($user){
      /*if ($user->groups[0]->id == 3 ) echo 'OK';
      exit;*/
      if($user->trainer)
        return $user->trainer;

        $trainer = new static;
        $trainer->user = $user;
        $trainer->save();

        $user->trainer = $trainer;

        return $trainer;
    }

    public function getFormateurConsultantOptions() {
      return array('formateur' => 'Formateur', 'consultant' => 'Consultant');
    }
}
