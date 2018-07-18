<?php namespace dg\Fournisseurs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgFournisseursSuppliers2 extends Migration
{
    public function up()
    {
        Schema::table('dg_fournisseurs_suppliers', function($table)
        {
            $table->integer('user_id');
        });
    }
    
    public function down()
    {
        Schema::table('dg_fournisseurs_suppliers', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
