<?php namespace dg\Fournisseurs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgFournisseursSuppliers extends Migration
{
    public function up()
    {
        Schema::table('dg_fournisseurs_suppliers', function($table)
        {
            $table->string('pays')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('dg_fournisseurs_suppliers', function($table)
        {
            $table->dropColumn('pays');
        });
    }
}
