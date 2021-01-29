<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historique', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('ID_Historistique');
            $table->integer('Difference_quantite')->nullable();
            $table->date('Date');
            $table->string('Libelle', 50)->nullable();
            $table->longText('Observation')->nullable();
            $table->integer('Id_article')->index('article_historique_fk');
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
        Schema::dropIfExists('historique');
    }
}
