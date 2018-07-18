<?php namespace Dg\Fournisseur\Models;

use Model;

/**
 * Fournisseur Model
 */
class Fournisseur extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'dg_fournisseur_fournisseurs';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
