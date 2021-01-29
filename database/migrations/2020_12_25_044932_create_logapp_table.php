<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogappTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logapp', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('Id');
            $table->dateTime('DateCreation', 6)->nullable();
            $table->string('SessionGuid', 50)->nullable();
            $table->longText('Message')->nullable();
            $table->integer('TypeLog')->nullable();
            $table->integer('SessionId')->index('fk_LogApp_Session');
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
        Schema::dropIfExists('logapp');
    }
}
