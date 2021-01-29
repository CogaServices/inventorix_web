<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSousFamilleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sous_famille', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('ID_ssfam');
            $table->string('Nom_sous_famille', 50)->nullable();
            $table->integer('Id_famille')->index('FK_SOUS_FAMILLE_FAMILLE');
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
        Schema::dropIfExists('sous_famille');
    }
}
