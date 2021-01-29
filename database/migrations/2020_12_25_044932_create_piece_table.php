<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePieceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piece', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('ID_piece');
            $table->string('Code_barre', 50);
            $table->string('Nom_piece', 50);
            $table->string('Nom_Entite', 50)->nullable();
            $table->string('Nom_direction', 50)->nullable();
            $table->string('Nom_bureau', 50)->nullable();
            $table->integer('suface');
            $table->integer('Nbre_fenetre');
            $table->string('Observation')->nullable();
            $table->string('Numero_porte', 50)->nullable();
            $table->integer('ID_bur')->index('bureau_piece_fk')->nullable()->default(null);
            $table->integer('ID_etage')->index('etage_piece_fk')->nullable()->default(null);
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
        Schema::dropIfExists('piece');
    }
}
