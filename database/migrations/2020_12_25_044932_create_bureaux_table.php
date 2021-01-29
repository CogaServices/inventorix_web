<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBureauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('bureaux', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('ID_bur');
            $table->integer('N_porte_bureau')->nullable();
            $table->string('Nom_bureau', 50)->nullable();
            $table->integer('Nb_occupant')->nullable();
            $table->longText('Commentaire')->nullable();
            $table->string('Code_automatique', 50);
            $table->integer('Id_direction')->index('direction_fk');
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
        Schema::dropIfExists('bureaux');
    }
}
