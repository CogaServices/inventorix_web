<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLogappTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('logapp', function (Blueprint $table) {
            $table->foreign('SessionId', 'fk_LogApp_Session')->references('Id')->on('session')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('logapp', function (Blueprint $table) {
            $table->dropForeign('fk_LogApp_Session');
        });
    }
}
