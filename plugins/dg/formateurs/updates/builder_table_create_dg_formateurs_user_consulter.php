<?php namespace dg\Formateurs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDgFormateursUserConsulter extends Migration
{
    public function up()
    {
        Schema::create('dg_formateurs_user_consulter', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dg_formateurs_user_consulter');
    }
}
