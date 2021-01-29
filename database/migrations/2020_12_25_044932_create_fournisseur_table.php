<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFournisseurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fournisseur', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('ID_fourn');
            $table->string('Nom_Fournisseur', 50)->nullable();
            $table->string('Adresse_Fournisseur', 100)->nullable();
            $table->string('Telephone_Fournisseur', 100)->nullable();
            $table->string('Localite_Fournisseur', 100)->nullable();
            $table->string('Email_Fournisseur', 50)->nullable();
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
        Schema::dropIfExists('fournisseur');
    }
}
