<?php namespace dg\OpportunitesDAffaires\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgOpportunitesdaffairesList extends Migration
{
    public function up()
    {
        Schema::table('dg_opportunitesdaffaires_list', function($table)
        {
            $table->text('slug')->nullable();
            $table->string('titre')->change();
            $table->string('extrait')->change();
            $table->string('pays')->change();
        });
    }
    
    public function down()
    {
        Schema::table('dg_opportunitesdaffaires_list', function($table)
        {
            $table->dropColumn('slug');
            $table->string('titre', 191)->change();
            $table->string('extrait', 191)->change();
            $table->string('pays', 191)->change();
        });
    }
}
