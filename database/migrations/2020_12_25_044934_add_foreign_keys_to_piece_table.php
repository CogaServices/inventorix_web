<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPieceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('piece', function (Blueprint $table) {
            $table->foreign('Id_bur', 'bureau_piece_fk')->references('ID_bur')->on('bureaux')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign('Id_etage', 'etage_piece_fk')->references('ID_etage')->on('etage')->onUpdate('NO ACTION')->onDelete('CASCADE');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('piece', function (Blueprint $table) {
            $table->dropForeign('bureau_piece_fk');
            $table->dropForeign('etage_piece_fk');
        });
    }
}
