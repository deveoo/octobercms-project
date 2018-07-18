<?php namespace dg\ProduitEtServices\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgProduitetservicesCategories extends Migration
{
    public function up()
    {
        Schema::table('dg_produitetservices_categories', function($table)
        {
            $table->integer('id_parent')->default(0);
            $table->increments('id')->unsigned(false)->change();
            $table->string('titre')->change();
            $table->string('slug')->change();
        });
    }
    
    public function down()
    {
        Schema::table('dg_produitetservices_categories', function($table)
        {
            $table->dropColumn('id_parent');
            $table->increments('id')->unsigned()->change();
            $table->string('titre', 191)->change();
            $table->string('slug', 191)->change();
        });
    }
}
