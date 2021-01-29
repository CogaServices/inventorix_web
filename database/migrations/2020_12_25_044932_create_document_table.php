<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('ID_doc');
            $table->string('Nom_doc', 50)->nullable();
            $table->string('Chemin_doc', 200)->nullable();
            $table->date('Datedoc')->nullable();
            $table->integer('Id_contrat')->nullable()->index('FK_DOCUMENT_CONTRAT');
            $table->integer('Id_site')->nullable()->index('FK_DOCUMENT_SITE');
            $table->integer('Id_piece')->nullable()->index('FK_DOCUMENT_PIECE');
            $table->integer('Id_article')->nullable()->index('FK_DOCUMENT_Article');
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
        Schema::dropIfExists('document');
    }
}
