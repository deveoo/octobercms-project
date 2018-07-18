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
        'image' => 'System\Models\file',
        'cv' => 'System\Models\file',
    ];

    public function getFormateurConsultantOptions() {
      return array('formateur' => 'Formateur', 'consultant' => 'Consultant');
    }
}
