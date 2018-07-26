<?php namespace dg\Formateurs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgFormateursListe4 extends Migration
{
    public function up()
    {
        Schema::table('dg_formateurs_liste', function($table)
        {
            $table->integer('user_id');
        });
    }
    
    public function down()
    {
        Schema::table('dg_formateurs_liste', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
