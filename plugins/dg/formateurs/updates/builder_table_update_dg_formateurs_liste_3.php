<?php namespace dg\Formateurs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgFormateursListe3 extends Migration
{
    public function up()
    {
        Schema::table('dg_formateurs_liste', function($table)
        {
            $table->string('formateur_consultant')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('dg_formateurs_liste', function($table)
        {
            $table->dropColumn('formateur_consultant');
        });
    }
}
