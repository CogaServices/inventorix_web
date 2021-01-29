<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSousFamilleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('sous_famille', function (Blueprint $table) {
            $table->foreign('Id_famille', 'FK_SOUS_FAMILLE_FAMILLE')->references('ID_fam')->on('famille')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sous_famille', function (Blueprint $table) {
            $table->dropForeign('FK_SOUS_FAMILLE_FAMILLE');
        });
    }
}
