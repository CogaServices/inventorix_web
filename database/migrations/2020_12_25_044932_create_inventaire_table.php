<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaire', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('ID_Inventaire');
            $table->integer('Quantite_Inv');
            $table->date('Date');
            $table->integer('Id_article')->nullable()->index('FK_INVENTAIRE_Article');
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
        Schema::dropIfExists('inventaire');
    }
}
