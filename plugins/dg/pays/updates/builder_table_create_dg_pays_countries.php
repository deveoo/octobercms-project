<?php namespace dg\Pays\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDgPaysCountries extends Migration
{
    public function up()
    {
        Schema::create('dg_pays_countries', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('titre')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dg_pays_countries');
    }
}
