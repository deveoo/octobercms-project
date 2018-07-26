<?php namespace dg\DocumentsUtiles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDgDocumentsutilesDocs extends Migration
{
    public function up()
    {
        Schema::create('dg_documentsutiles_docs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('pays_id')->unsigned();
            $table->string('tire')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dg_documentsutiles_docs');
    }
}
