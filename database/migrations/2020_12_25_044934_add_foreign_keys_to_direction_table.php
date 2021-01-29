<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDirectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('direction', function (Blueprint $table) {
            $table->foreign('ID_app', 'appartement_direction_fk')->references('ID_app')->on('appartement')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('direction', function (Blueprint $table) {
            $table->dropForeign('appartement_direction_fk');
        });
    }
}
