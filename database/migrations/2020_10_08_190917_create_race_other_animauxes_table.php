<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaceOtherAnimauxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race_other_animaux', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('race__other_animal_')->nullable();
            $table->unsignedBigInteger('other_animal_id')->default(8);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('race_other_animauxes');
    }
}
