<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedBigInteger('first_animal_id');
            $table->unsignedBigInteger('second_animal_id');
            $table->unsignedBigInteger('third_animal_id');
            $table->text('content');
            $table->unsignedBigInteger('garde_id');
            $table->integer('number_visit');
            $table->string('phone');
            $table->string('mail');
            $table->unsignedBigInteger('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandes');
    }
}
