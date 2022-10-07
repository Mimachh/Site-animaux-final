<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsOwnedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals_owneds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('animal_name');
            $table->text('personnality');
            $table->unsignedBigInteger('espece');
            $table->boolean('likes_male_dog');
            $table->boolean('likes_female_dog');
            $table->boolean('likes_male_cat');
            $table->boolean('likes_female_cat');
            $table->boolean('likes_male_rabbit');
            $table->boolean('likes_female_rabbit');
            $table->boolean('likes_bird');
            $table->boolean('likes_reptile');

            $table->unsignedBigInteger('owned_by');
           
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals_owneds');
    }
}
