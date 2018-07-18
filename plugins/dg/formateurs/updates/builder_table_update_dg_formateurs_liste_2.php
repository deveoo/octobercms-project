<?php namespace dg\Formateurs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgFormateursListe2 extends Migration
{
    public function up()
    {
        Schema::table('dg_formateurs_liste', function($table)
        {
            $table->text('linkedin_viadeo')->nullable();
            $table->string('youtube_siteperso')->nullable();
            $table->string('pays')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
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
            $table->dropColumn('linkedin_viadeo');
            $table->dropColumn('youtube_siteperso');
            $table->dropColumn('pays');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->string('titre', 191)->change();
            $table->string('slug', 191)->change();
            $table->string('nom_prenom', 191)->change();
            $table->string('email', 191)->change();
            $table->string('tel', 191)->change();
            $table->string('poste', 191)->change();
        });
    }
}
