<?php namespace dg\Emploi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgEmploiOffres extends Migration
{
    public function up()
    {
        Schema::table('dg_emploi_offres', function($table)
        {
            $table->text('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('dg_emploi_offres', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
