<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('Id');
            $table->dateTime('DateDebut', 6);
            $table->dateTime('DateFin', 6)->nullable();
            $table->integer('UtilisateurId')->index('fk_Session_Utilisateur');
            $table->string('SessionGuid', 50)->nullable();
            $table->boolean('Active')->nullable();
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
        Schema::dropIfExists('session');
    }
}
