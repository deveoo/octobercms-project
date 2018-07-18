<?php namespace dg\Contact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDgContact extends Migration
{
    public function up()
    {
        Schema::create('dg_contact_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('nom_prenom')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email')->nullable();
            $table->text('message')->nullable();
            $table->boolean('readed')->nullable()->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dg_contact_');
    }
}
