<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('document', function (Blueprint $table) {
            $table->foreign('Id_article', 'FK_DOCUMENT_Article')->references('ID_article')->on('article')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('Id_contrat', 'FK_DOCUMENT_CONTRAT')->references('ID_contrat')->on('contrat')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('Id_piece', 'FK_DOCUMENT_PIECE')->references('ID_piece')->on('piece')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('Id_site', 'FK_DOCUMENT_SITE')->references('ID_site')->on('site')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('document', function (Blueprint $table) {
            $table->dropForeign('FK_DOCUMENT_Article');
            $table->dropForeign('FK_DOCUMENT_CONTRAT');
            $table->dropForeign('FK_DOCUMENT_PIECE');
            $table->dropForeign('FK_DOCUMENT_SITE');
        });
    }
}
