<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('Id');
            $table->string('Login', 50)->nullable();
            $table->string('MotDePasse', 50)->nullable();
            $table->boolean('Actif')->nullable();
            $table->dateTime('PeriodeDeValiditeDebut', 6);
            $table->dateTime('PeriodeDeValiditeFin', 6)->nullable();
            $table->dateTime('DateCreation', 6)->nullable();
            $table->dateTime('DateModification', 6)->nullable();
            $table->integer('ProfilId')->nullable();
            $table->integer('NiveauSecurite')->nullable();
            $table->string('NomPrenoms', 50)->nullable();
            $table->string('email',250)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('utilisateur');
    }
}
