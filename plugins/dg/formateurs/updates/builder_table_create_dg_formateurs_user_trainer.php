<?php namespace dg\Formateurs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDgFormateursUserTrainer extends Migration
{
    public function up()
    {
        Schema::create('dg_formateurs_user_trainer', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('adresse')->nullable();
            $table->string('age')->nullable();
            $table->text('email')->nullable();
            $table->string('tel')->nullable();
            $table->string('statut')->nullable();
            $table->text('education_backgrund')->nullable();
            $table->text('sujet_formation')->nullable();
            $table->text('experience_formation')->nullable();
            $table->integer('user_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dg_formateurs_user_trainer');
    }
}
