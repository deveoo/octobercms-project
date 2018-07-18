<?php namespace dg\ProduitEtServices\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDgProduitetservicesProduits extends Migration
{
    public function up()
    {
        Schema::create('dg_produitetservices_produits', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('titre')->nullable();
            $table->string('titre_additionnel')->nullable();
            $table->text('extrait')->nullable();
            $table->text('description')->nullable();
            $table->text('description_additionnel')->nullable();
            $table->string('slug')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dg_produitetservices_produits');
    }
}
