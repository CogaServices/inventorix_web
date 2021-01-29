<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAppartementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('appartement', function (Blueprint $table) {
            $table->foreign('Id_etage', 'etage_appartement_fk')->references('Id_etage')->on('etage')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appartement', function (Blueprint $table) {
            $table->dropForeign('etage_appartement_fk');
        });
    }
}
