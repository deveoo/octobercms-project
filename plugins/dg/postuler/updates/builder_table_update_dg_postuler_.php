<?php namespace dg\Postuler\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgPostuler extends Migration
{
    public function up()
    {
        Schema::table('dg_postuler_', function($table)
        {
            $table->dropColumn('cv');
        });
    }
    
    public function down()
    {
        Schema::table('dg_postuler_', function($table)
        {
            $table->string('cv', 191)->nullable();
        });
    }
}
