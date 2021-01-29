<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysdiagramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sysdiagrams', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->string('name', 160);
            $table->integer('principal_id');
            $table->increments('diagram_id');
            $table->integer('version')->nullable();
            $table->binary('definition')->nullable();
            $table->unique(['principal_id', 'name'], 'UK_principal_name');
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
        Schema::dropIfExists('sysdiagrams');
    }
}
