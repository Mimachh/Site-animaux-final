<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimauxFermesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animaux_fermes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('race_animaux_ferme')->nullable();
            $table->unsignedBigInteger('animaux_ferme_id')->default(7);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animaux_fermes');
    }
}
