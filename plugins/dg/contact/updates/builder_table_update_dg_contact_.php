<?php namespace dg\Contact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgContact extends Migration
{
    public function up()
    {
        Schema::table('dg_contact_', function($table)
        {
            $table->string('nom_prenom')->change();
            $table->string('telephone')->change();
            $table->string('email')->change();
        });
    }
    
    public function down()
    {
        Schema::table('dg_contact_', function($table)
        {
            $table->string('nom_prenom', 191)->change();
            $table->string('telephone', 191)->change();
            $table->string('email', 191)->change();
        });
    }
}
