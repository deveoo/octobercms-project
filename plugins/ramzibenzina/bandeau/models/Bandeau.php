<?php namespace RamziBenzina\Bandeau\Models;

use Model;

/**
 * Model
 */
class Bandeau extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ramzibenzina_bandeau_images';
    
    /* Relations */
    public $attachOne = [
        'image' => 'System\Models\file'
    ];
    
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['titre', 'description', 'lien' ];
    
}
