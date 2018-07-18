<?php namespace dg\ProduitEtServices\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgProduitetservicesProduitFournisseur3 extends Migration
{
    public function up()
    {
        Schema::table('dg_produitetservices_produit_fournisseur', function($table)
        {
            $table->renameColumn('id_produit', 'produits_id');
        });
    }
    
    public function down()
    {
        Schema::table('dg_produitetservices_produit_fournisseur', function($table)
        {
            $table->renameColumn('produits_id', 'id_produit');
        });
    }
}
