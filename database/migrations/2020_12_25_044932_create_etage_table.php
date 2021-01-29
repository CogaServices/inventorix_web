<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etage', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('ID_etage');
            $table->string('Nom_etage', 50);
            $table->integer('Id_site')->index('site_etage_fk');
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
        Schema::dropIfExists('etage');
    }
}
