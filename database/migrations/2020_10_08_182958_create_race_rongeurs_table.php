<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaceRongeursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race_rongeurs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('race_rongeur')->nullable();
            $table->unsignedBigInteger('rongeur_id')->default(4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('race_rongeurs');
    }
}
