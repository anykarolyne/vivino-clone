<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvaliacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacoes', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('idUser')->unsigned();
            $table->integer('idWine')->unsigned();
            $table->integer('stars')->unsigned();
            $table->string('comment');

            $table->foreign('idUser')->references('id')->on('users');
            $table->foreign('idWine')->references('id')->on('wines');
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
        Schema::drop('avaliacaos');
    }
}
