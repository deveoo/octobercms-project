<?php namespace dg\Formateurs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgFormateursListe5 extends Migration
{
    public function up()
    {
        Schema::table('dg_formateurs_liste', function($table)
        {
            $table->string('email2', 191)->nullable();
            $table->string('pays2', 191)->nullable();
            $table->dropColumn('email');
            $table->dropColumn('pays');
        });
    }
    
    public function down()
    {
        Schema::table('dg_formateurs_liste', function($table)
        {
            $table->dropColumn('email2');
            $table->dropColumn('pays2');
            $table->string('email', 191)->nullable();
            $table->string('pays', 191)->nullable();
        });
    }
}
