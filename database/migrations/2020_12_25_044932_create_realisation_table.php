<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealisationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realisation', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('ID_reali');
            $table->longText('Observation')->nullable();
            $table->date('Datereal')->nullable();
            $table->integer('Id_vis')->index('FK_REALISATION_VISITE');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realisation');
    }
}
