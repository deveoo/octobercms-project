<?php namespace dg\OpportunitesDAffaires\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDgOpportunitesdaffairesList extends Migration
{
    public function up()
    {
        Schema::create('dg_opportunitesdaffaires_list', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titre')->nullable();
            $table->string('extrait')->nullable();
            $table->text('description')->nullable();
            $table->string('pays')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dg_opportunitesdaffaires_list');
    }
}
