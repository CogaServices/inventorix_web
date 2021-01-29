<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToHistoriqueEtatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('historique_etat', function (Blueprint $table) {
            $table->foreign('Id_article', 'FK_HISTORIQUE_ETAT_Article')->references('ID_article')->on('article')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('historique_etat', function (Blueprint $table) {
            $table->dropForeign('FK_HISTORIQUE_ETAT_Article');
        });
    }
}
