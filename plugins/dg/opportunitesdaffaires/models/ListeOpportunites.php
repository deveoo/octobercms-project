<?php namespace dg\OpportunitesDAffaires\Models;

use Model;

/**
 * Model
 */
class ListeOpportunites extends Model
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
    public $table = 'dg_opportunitesdaffaires_list';

     public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['titre', 'description', 'extrait' , 'slug', 'pays' ];
}
