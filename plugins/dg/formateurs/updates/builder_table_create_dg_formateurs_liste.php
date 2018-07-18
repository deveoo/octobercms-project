<?php namespace dg\Formateurs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDgFormateursListe extends Migration
{
    public function up()
    {
        Schema::create('dg_formateurs_liste', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titre')->nullable();
            $table->string('slug')->nullable();
            $table->string('nom_prenom')->nullable();
            $table->string('email')->nullable();
            $table->string('tel')->nullable();
            $table->string('poste')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dg_formateurs_liste');
    }
}
