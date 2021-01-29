<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visite', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('ID_visite');
            $table->string('Descriptif', 50)->nullable();
            $table->date('Dateffet')->nullable();
            $table->date('Daterealisation')->nullable();
            $table->string('Temps', 50)->nullable();
            $table->date('Dateprochaine')->nullable();
            $table->integer('Id_contrat')->index('FK_VISITE_CONTRAT');
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
        Schema::dropIfExists('visite');
    }
}
