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
            $table->string('animal_name')->nullable();
            $table->text('personnality')->nullable();
            $table->string('espece')->nullable();
            $table->boolean('male_dogs')->nullable();
            $table->boolean('female_dogs')->nullable();
            $table->boolean('male_cats')->nullable();
            $table->boolean('female_cats')->nullable();
            $table->boolean('male_rongeurs')->nullable();
            $table->boolean('female_rongeurs')->nullable();
            $table->boolean('birds')->nullable();
            $table->boolean('reptiles')->nullable();

            $table->unsignedBigInteger('owner')->nullable();
           
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
