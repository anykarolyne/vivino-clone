<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstilosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estilos', function (Blueprint $table) {
            $table->integer('idWine')->unsigned();
            $table->string('grape');

            $table->foreign('idWine')->references('id')->on('wines');
            $table->primary(['idWine', 'grape']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('estilos');
    }
}
