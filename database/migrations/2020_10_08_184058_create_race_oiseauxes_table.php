<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaceOiseauxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race_oiseaux', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('race_oiseau')->nullable();
            $table->unsignedBigInteger('oiseau_id')->default(5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('race_oiseauxes');
    }
}
