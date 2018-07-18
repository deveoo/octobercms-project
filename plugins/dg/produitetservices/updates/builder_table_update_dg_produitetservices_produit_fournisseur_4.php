<?php namespace dg\ProduitEtServices\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgProduitetservicesProduitFournisseur4 extends Migration
{
    public function up()
    {
        Schema::table('dg_produitetservices_produit_fournisseur', function($table)
        {
            $table->renameColumn('id_fournisseur', 'suppliers_id');
        });
    }
    
    public function down()
    {
        Schema::table('dg_produitetservices_produit_fournisseur', function($table)
        {
            $table->renameColumn('suppliers_id', 'id_fournisseur');
        });
    }
}
