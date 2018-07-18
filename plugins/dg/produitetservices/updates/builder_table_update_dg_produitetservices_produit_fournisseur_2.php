<?php namespace dg\ProduitEtServices\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgProduitetservicesProduitFournisseur2 extends Migration
{
    public function up()
    {
        Schema::table('dg_produitetservices_produit_fournisseur', function($table)
        {
            $table->boolean('validated_at')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('dg_produitetservices_produit_fournisseur', function($table)
        {
            $table->dropColumn('validated_at');
        });
    }
}
