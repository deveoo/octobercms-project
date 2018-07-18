<?php namespace dg\Partenaires\Models;

use Model;

/**
 * Model
 */
class Partenaires extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dg_partenaires_logos';

    /* Relations */
    public $attachOne = [
        'logo' => 'System\Models\file'
    ];

    public function reorderExtendQuery($query)
    {
        $query->withTrashed();
    }
}
