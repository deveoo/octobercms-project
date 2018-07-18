<?php namespace RamziBenzina\Bandeau\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRamzibenzinaBandeauImages extends Migration
{
    public function up()
    {
        Schema::create('ramzibenzina_bandeau_images', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titre')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->text('lien')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ramzibenzina_bandeau_images');
    }
}
