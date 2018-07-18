<?php namespace Dg\Fournisseur\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateFournisseursTable extends Migration
{
    public function up()
    {
        Schema::create('dg_fournisseur_fournisseurs', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dg_fournisseur_fournisseurs');
    }
}
