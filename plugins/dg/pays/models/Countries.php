<?php namespace dg\Pays\Models;

use Model;

/**
 * Model
 */
class Countries extends Model
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
    public $table = 'dg_pays_countries';

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['titre', 'description', 'slug' ];

}
