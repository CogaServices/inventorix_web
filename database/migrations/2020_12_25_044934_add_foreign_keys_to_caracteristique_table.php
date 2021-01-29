<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCaracteristiqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('caracteristique', function (Blueprint $table) {
            $table->foreign('Id_article', 'fk_caraq_article')->references('ID_article')->on('article')->onUpdate('SET NULL')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('caracteristique', function (Blueprint $table) {
            $table->dropForeign('fk_caraq_article');
        });
    }
}
