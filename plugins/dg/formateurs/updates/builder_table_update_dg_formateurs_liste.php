<?php namespace dg\Formateurs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgFormateursListe extends Migration
{
    public function up()
    {
        Schema::table('dg_formateurs_liste', function($table)
        {
            $table->text('description')->nullable();
            $table->string('titre')->change();
            $table->string('slug')->change();
            $table->string('nom_prenom')->change();
            $table->string('email')->change();
            $table->string('tel')->change();
            $table->string('poste')->change();
        });
    }
    
    public function down()
    {
        Schema::table('dg_formateurs_liste', function($table)
        {
            $table->dropColumn('description');
            $table->string('titre', 191)->change();
            $table->string('slug', 191)->change();
            $table->string('nom_prenom', 191)->change();
            $table->string('email', 191)->change();
            $table->string('tel', 191)->change();
            $table->string('poste', 191)->change();
        });
    }
}
