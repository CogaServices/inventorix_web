<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriqueEtatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historique_etat', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('ID_Hist_etat');
            $table->string('Libelle', 50)->nullable();
            $table->date('Date')->nullable();
            $table->integer('Id_article')->nullable()->index('FK_HISTORIQUE_ETAT_Article');
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
        Schema::dropIfExists('historique_etat');
    }
}
