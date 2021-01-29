<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devise', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('ID_devise');
            $table->string('Nom_devise', 50);
            $table->double('Taux_conversion');
            $table->string('Defaut', 50);
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
        Schema::dropIfExists('devise');
    }
}
