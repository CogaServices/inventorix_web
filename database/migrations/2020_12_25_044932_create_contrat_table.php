<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrat', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('ID_contrat');
            $table->string('Type', 50)->nullable();
            $table->date('Datedebut')->nullable();
            $table->date('Datefin')->nullable();
            $table->integer('Cout')->nullable();
            $table->longText('Observation')->nullable();
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
        Schema::dropIfExists('contrat');
    }
}
