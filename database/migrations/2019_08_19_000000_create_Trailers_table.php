<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrailersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trailers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('year');
            $table->string('genero');
            $table->string('duracion');
            $table->longText('Reparto');
            $table->longText('sinopsis');
            $table->longText('url');
            $table->longText('img');
            $table->timestamps();
            $table->unsignedInteger('id_Usuario');
            $table->foreign('id_Usuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trailers');
    }
}
