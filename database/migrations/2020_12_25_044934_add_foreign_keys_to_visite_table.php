<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToVisiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('visite', function (Blueprint $table) {
            $table->foreign('Id_contrat', 'FK_VISITE_CONTRAT')->references('ID_contrat')->on('contrat')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('visite', function (Blueprint $table) {
            $table->dropForeign('FK_VISITE_CONTRAT');
        });
    }
}
