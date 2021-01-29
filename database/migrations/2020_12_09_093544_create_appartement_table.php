<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppartementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appartement', function (Blueprint $table) {
                $table->engine = 'MyISAM';
                $table->increments('ID_app');
                $table->string('Nom_appartement', 50);
                $table->integer('Id_etage')->index('etage_appartement_fk')->default(NULL);
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
        Schema::dropIfExists('etage_appartement_fk');
    }
}

