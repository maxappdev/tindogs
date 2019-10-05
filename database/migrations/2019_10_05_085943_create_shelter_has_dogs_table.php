<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShelterHasDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shelter_has_dogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('dog_id');
            $table->unsignedBigInteger('shelter_id');
            $table->timestamps();
            $table->foreign('dog_id')->references('id')->on('dogs');
            //$table->foreign('shelter_id')->references('id')->on('shelters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shelter_has_dogs');
    }
}
