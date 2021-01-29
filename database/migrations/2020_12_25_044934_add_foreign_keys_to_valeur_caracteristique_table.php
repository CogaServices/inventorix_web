<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToValeurCaracteristiqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('valeur_caracteristique', function (Blueprint $table) {
            $table->foreign('Id_caraq', 'FK_VALEUR_CARACTERISTIQUE_CARACTERISTIQUE')->references('ID_carac')->on('caracteristique')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('valeur_caracteristique', function (Blueprint $table) {
            $table->dropForeign('FK_VALEUR_CARACTERISTIQUE_CARACTERISTIQUE');
        });
    }
}
