<?php namespace dg\Pays\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDgPaysCountries extends Migration
{
    public function up()
    {
        Schema::table('dg_pays_countries', function($table)
        {
            $table->text('slug')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('titre')->change();
        });
    }
    
    public function down()
    {
        Schema::table('dg_pays_countries', function($table)
        {
            $table->dropColumn('slug');
            $table->increments('id')->unsigned()->change();
            $table->string('titre', 191)->change();
        });
    }
}
