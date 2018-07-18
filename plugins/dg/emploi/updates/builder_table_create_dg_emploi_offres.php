<?php namespace dg\Emploi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDgEmploiOffres extends Migration
{
    public function up()
    {
        Schema::create('dg_emploi_offres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titre')->nullable();
            $table->text('description')->nullable();
            $table->string('societe')->nullable();
            $table->text('extrait')->nullable();
            $table->dateTime('expire_at')->nullable();
            $table->string('pays')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dg_emploi_offres');
    }
}
