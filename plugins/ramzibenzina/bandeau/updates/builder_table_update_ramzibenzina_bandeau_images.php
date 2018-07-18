<?php namespace RamziBenzina\Bandeau\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRamzibenzinaBandeauImages extends Migration
{
    public function up()
    {
        Schema::table('ramzibenzina_bandeau_images', function($table)
        {
            $table->dropColumn('image');
        });
    }
    
    public function down()
    {
        Schema::table('ramzibenzina_bandeau_images', function($table)
        {
            $table->text('image')->nullable();
        });
    }
}
