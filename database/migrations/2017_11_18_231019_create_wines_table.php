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
            $table->string('email_user');
            $table->foreign('email_user')->references('email')->on('users');
            $table->string('producer');
            $table->string('name');
            $table->float('price');
            $table->string('country');
            $table->enum('type', ['Tinto', 'Branco', 'Rose', 'Espumante', 'Sobremesa', 'Porto']);
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
