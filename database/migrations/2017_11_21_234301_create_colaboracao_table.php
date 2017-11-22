<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColaboracaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaboracao', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->integer('idUser')->unsigned();
            $table->integer('idWine')->unsigned();
            $table->primary(['idUser', 'idWine']);

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
        Schema::drop('colaboracaos');
    }
}
