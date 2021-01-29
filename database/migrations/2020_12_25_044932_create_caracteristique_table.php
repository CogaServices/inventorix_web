<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaracteristiqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristique', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('ID_carac');
            $table->string('Type', 50)->nullable();
            $table->string('Libellé', 50)->nullable();
            $table->string('Echeance', 50)->nullable();
            $table->string('Nbre_jour', 50)->nullable();
            $table->string('Date', 50)->nullable();
            $table->string('Valeur', 50)->nullable();
            $table->string('ValeurBool', 50)->nullable();
            $table->integer('Id_article')->nullable()->index('fk_caraq_article');
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
        Schema::dropIfExists('caracteristique');
    }
}
