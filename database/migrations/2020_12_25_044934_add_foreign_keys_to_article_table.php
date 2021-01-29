<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('article', function (Blueprint $table) {
            $table->foreign('Id_devise', 'FK_Article_DEVISE')->references('ID_devise')->on('devise')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('Id_etat', 'FK_Article_ETAT')->references('ID_etat')->on('etat')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('Id_four', 'FK_Article_FOURNISSEUR')->references('ID_fourn')->on('fournisseur')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('Id_marq', 'FK_Article_MARQUE')->references('ID_marque')->on('marque')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('Id_piece', 'FK_Article_PIECE')->references('ID_piece')->on('piece')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('Id_sousfami', 'FK_Article_SOUS_FAMILLE')->references('ID_ssfam')->on('sous_famille')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('article', function (Blueprint $table) {
            $table->dropForeign('FK_Article_DEVISE');
            $table->dropForeign('FK_Article_ETAT');
            $table->dropForeign('FK_Article_FOURNISSEUR');
            $table->dropForeign('FK_Article_MARQUE');
            $table->dropForeign('FK_Article_PIECE');
            $table->dropForeign('FK_Article_SOUS_FAMILLE');
        });
    }
}
