<?php namespace dg\ProduitEtServices\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDgProduitetservicesProduitCategorie extends Migration
{
    public function up()
    {
        Schema::create('dg_produitetservices_produit_categorie', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('produit_id')->nullable();
            $table->integer('category_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dg_produitetservices_produit_categorie');
    }
}
