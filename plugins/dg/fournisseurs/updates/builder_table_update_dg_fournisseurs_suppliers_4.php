<?php namespace dg\Fournisseurs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgFournisseursSuppliers4 extends Migration
{
    public function up()
    {
        Schema::table('dg_fournisseurs_suppliers', function($table)
        {
            $table->boolean('activated')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('dg_fournisseurs_suppliers', function($table)
        {
            $table->dropColumn('activated');
        });
    }
}
