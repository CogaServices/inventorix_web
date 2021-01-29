<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('ID_site');
            $table->string('Nom_Site', 50);
            $table->string('Nature', 50)->nullable();
            $table->string('Localisation_geographique', 50)->nullable();
            $table->string('Addresse_postale', 50)->nullable();
            $table->integer('Contact')->nullable();
            $table->integer('Code_postal')->nullable();
            $table->string('Fax', 50)->nullable();
            $table->longText('Commentaire')->nullable();
            $table->integer('Id_entite')->nullable()->index('entite_fk');
            $table->string('Code_automatique', 50);
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
        Schema::dropIfExists('site');
    }
}
