<?php namespace dg\Postuler\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDgPostuler extends Migration
{
    public function up()
    {
        Schema::create('dg_postuler_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('offre_id')->nullable();
            $table->string('nom')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('pays')->nullable();
            $table->string('cv')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dg_postuler_');
    }
}
