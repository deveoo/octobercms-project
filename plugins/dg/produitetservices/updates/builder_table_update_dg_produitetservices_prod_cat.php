<?php namespace dg\ProduitEtServices\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgProduitetservicesProdCat extends Migration
{
    public function up()
    {
        Schema::rename('dg_produitetservices_produit_categorie', 'dg_produitetservices_prod_cat');    Schema::table('dg_produitetservices_prod_cat', function($table)
        {
            $table->primary(['produits_id','categories_id']);
        });
    }
    
    public function down()
    {
        Schema::rename('dg_produitetservices_prod_cat', 'dg_produitetservices_produit_categorie');
        Schema::table('dg_produitetservices_produit_categorie', function($table)
        {
            $table->dropPrimary(['produits_id','categories_id']);
        });
    }
}
