<?php namespace dg\Emploi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgEmploiOffres2 extends Migration
{
    public function up()
    {
        Schema::table('dg_emploi_offres', function($table)
        {
            $table->integer('pays_id')->nullable();
            $table->dropColumn('pays');
        });
    }
    
    public function down()
    {
        Schema::table('dg_emploi_offres', function($table)
        {
            $table->dropColumn('pays_id');
            $table->string('pays', 191)->nullable();
        });
    }
}
