<?php namespace dg\ProduitEtServices\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgProduitetservicesProduits extends Migration
{
    public function up()
    {
        Schema::table('dg_produitetservices_produits', function($table)
        {
            $table->string('reference')->nullable();
            $table->string('analogue_ip')->nullable();
            $table->string('resolution')->nullable();
            $table->string('objective')->nullable();
            $table->string('noise')->nullable();
            $table->string('capacity')->nullable();
            $table->string('norm')->nullable();
            $table->string('brand')->nullable();
            $table->string('technology')->nullable();
            $table->string('internal_external')->nullable();
            $table->string('decibel')->nullable();
            $table->string('material_detected')->nullable();
            $table->text('type')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('dg_produitetservices_produits', function($table)
        {
            $table->dropColumn('reference');
            $table->dropColumn('analogue_ip');
            $table->dropColumn('resolution');
            $table->dropColumn('objective');
            $table->dropColumn('noise');
            $table->dropColumn('capacity');
            $table->dropColumn('norm');
            $table->dropColumn('brand');
            $table->dropColumn('technology');
            $table->dropColumn('internal_external');
            $table->dropColumn('decibel');
            $table->dropColumn('material_detected');
            $table->dropColumn('type');
        });
    }
}
