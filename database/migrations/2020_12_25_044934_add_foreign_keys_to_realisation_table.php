<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRealisationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('realisation', function (Blueprint $table) {
            $table->foreign('Id_vis', 'FK_REALISATION_VISITE')->references('ID_visite')->on('visite')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('realisation', function (Blueprint $table) {
            $table->dropForeign('FK_REALISATION_VISITE');
        });
    }
}
