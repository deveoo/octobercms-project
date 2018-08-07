<?php namespace dg\Postuler\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgPostuler2 extends Migration
{
    public function up()
    {
        Schema::table('dg_postuler_', function($table)
        {
            $table->text('offre_id')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('dg_postuler_', function($table)
        {
            $table->integer('offre_id')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
