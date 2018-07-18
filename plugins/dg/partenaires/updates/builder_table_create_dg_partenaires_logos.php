<?php namespace dg\Partenaires\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDgPartenairesLogos extends Migration
{
    public function up()
    {
        Schema::create('dg_partenaires_logos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('nom')->nullable();
            $table->string('lien')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dg_partenaires_logos');
    }
}
