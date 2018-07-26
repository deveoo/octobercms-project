<?php namespace dg\DocumentsUtiles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgDocumentsutilesDocs extends Migration
{
    public function up()
    {
        Schema::table('dg_documentsutiles_docs', function($table)
        {
            $table->string('titre')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->dropColumn('tire');
        });
    }
    
    public function down()
    {
        Schema::table('dg_documentsutiles_docs', function($table)
        {
            $table->dropColumn('titre');
            $table->increments('id')->unsigned()->change();
            $table->string('tire', 191)->nullable();
        });
    }
}
