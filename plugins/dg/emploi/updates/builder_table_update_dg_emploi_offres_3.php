<?php namespace dg\Emploi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgEmploiOffres3 extends Migration
{
    public function up()
    {
        Schema::table('dg_emploi_offres', function($table)
        {
            $table->dropColumn('pays_id');
        });
    }
    
    public function down()
    {
        Schema::table('dg_emploi_offres', function($table)
        {
            $table->integer('pays_id')->nullable();
        });
    }
}
