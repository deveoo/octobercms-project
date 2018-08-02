<?php namespace dg\DocumentsUtiles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgDocumentsutilesDocs2 extends Migration
{
    public function up()
    {
        Schema::table('dg_documentsutiles_docs', function($table)
        {
            $table->integer('pays_id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('dg_documentsutiles_docs', function($table)
        {
            $table->integer('pays_id')->unsigned()->change();
        });
    }
}
