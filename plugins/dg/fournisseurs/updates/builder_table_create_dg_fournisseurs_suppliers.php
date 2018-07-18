<?php namespace dg\Fournisseurs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDgFournisseursSuppliers extends Migration
{
    public function up()
    {
        Schema::create('dg_fournisseurs_suppliers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('titre')->nullable();
            $table->text('extrait')->nullable();
            $table->text('description1')->nullable();
            $table->text('description2')->nullable();
            $table->text('map')->nullable();
            $table->string('adresse1')->nullable();
            $table->string('adresse2')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('siteweb')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->text('slug')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dg_fournisseurs_suppliers');
    }
}
