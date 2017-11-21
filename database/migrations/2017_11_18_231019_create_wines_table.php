<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wines', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('of_user')->unsigned();
            $table->foreign('of_user')->references('id')->on('users');

            $table->string('producer');
            $table->string('name');
            $table->string('country');
            $table->string('type');
            $table->string('style');
            $table->string('grape');
            $table->string('harmonization');
            $table->string('photo')->nullable();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('wines');
    }
}
