<?php namespace dg\Formateurs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgFormateursUserTrainer extends Migration
{
    public function up()
    {
        Schema::table('dg_formateurs_user_trainer', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('age')->change();
            $table->string('tel')->change();
            $table->string('statut')->change();
        });
    }
    
    public function down()
    {
        Schema::table('dg_formateurs_user_trainer', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->string('age', 191)->change();
            $table->string('tel', 191)->change();
            $table->string('statut', 191)->change();
        });
    }
}
