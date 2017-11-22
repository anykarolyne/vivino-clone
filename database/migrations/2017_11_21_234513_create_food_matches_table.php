<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_matches', function (Blueprint $table) {
            $table->integer('idWine')->unsigned();
            $table->string('food');

            $table->foreign('idWine')->references('id')->on('wines');
            $table->primary(['idWine', 'food']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('food_matches');
    }
}
