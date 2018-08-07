<?php namespace dg\Postuler\Models;

use Model;

/**
 * Model
 */
class Postuler extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
      'cv' => 'System\Models\File'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dg_postuler_';
}
