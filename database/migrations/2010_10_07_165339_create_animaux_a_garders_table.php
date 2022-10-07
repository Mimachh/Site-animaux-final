<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimauxAGardersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animaux_a_garders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('espece');
            /* $table->unsignedBigInteger('race'); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animaux_a_garders');
    }
}
