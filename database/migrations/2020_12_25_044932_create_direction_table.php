<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direction', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('ID_dir');
            $table->string('Nom_de_la_direction', 50)->nullable();
            $table->string('Code_direction', 50)->nullable();
            $table->integer('Contact')->nullable();
            $table->string('Nom_du_directeur', 50)->nullable();
            $table->string('Description_activité', 50)->nullable();
            $table->longText('Commentaire')->nullable();
            $table->string('Code_automatique', 50);
            $table->integer('ID_app')->nullable()->index('appartement_direction_fk');
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
        Schema::dropIfExists('direction');
    }
}
