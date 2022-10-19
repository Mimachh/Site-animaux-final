<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspeceAnimauxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especes_animaux', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('espece')->nullable();
           /* $table->unsignedBigInteger('race')->nullable(); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('espece_animauxes');
    }
}
