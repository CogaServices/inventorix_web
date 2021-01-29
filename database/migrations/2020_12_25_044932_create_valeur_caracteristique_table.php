<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValeurCaracteristiqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valeur_caracteristique', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('ID_Valeur');
            $table->char('Libelle', 10)->nullable();
            $table->integer('Id_caraq')->nullable()->index('FK_VALEUR_CARACTERISTIQUE_CARACTERISTIQUE');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('valeur_caracteristique');
    }
}
