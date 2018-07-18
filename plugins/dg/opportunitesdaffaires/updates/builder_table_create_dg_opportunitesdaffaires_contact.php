<?php namespace dg\OpportunitesDAffaires\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDgOpportunitesdaffairesContact extends Migration
{
    public function up()
    {
        Schema::create('dg_opportunitesdaffaires_contact', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('id_offre')->nullable();
            $table->string('nom')->nullable();
            $table->string('societe')->nullable();
            $table->string('pays')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->text('message')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dg_opportunitesdaffaires_contact');
    }
}
