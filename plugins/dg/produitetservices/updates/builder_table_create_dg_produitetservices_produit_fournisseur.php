<?php namespace dg\ProduitEtServices\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDgProduitetservicesProduitFournisseur extends Migration
{
    public function up()
    {
        Schema::create('dg_produitetservices_produit_fournisseur', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_produit')->nullable();
            $table->integer('id_fournisseur')->nullable();
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dg_produitetservices_produit_fournisseur');
    }
}
