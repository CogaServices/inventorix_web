<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entite', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('ID_entite');
            $table->string('Raison_sociale', 50)->nullable();
            $table->integer('Code_postal')->nullable();
            $table->string('Type_particulier', 50)->nullable();
            $table->integer('Nb_site')->nullable();
            $table->string('Nom_responsable_projet', 50)->nullable();
            $table->string('forme_de_societe', 50);
            $table->string('Objet_social', 50);
            $table->string('RCCM', 100)->nullable();
            $table->string('NCC', 50)->nullable();
            $table->string('Nom_du_groupe', 50)->nullable();
            $table->string('Contact_organisation', 15);
            $table->string('Contact_responsable_projet', 15)->nullable();
            $table->string('Code_automatique', 50);
            $table->integer('Numero_Ordre')->nullable();
            $table->string('Adresse_Siege_Social', 150)->nullable();
            $table->string('NIdentification_fiscale', 50)->nullable();
            $table->string('Sigle', 50)->nullable();
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
        Schema::dropIfExists('entite');
    }
}
