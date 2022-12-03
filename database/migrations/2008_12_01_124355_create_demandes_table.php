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
            $table->nullableTimestamps();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->unsignedBigInteger('first_animal_id')->nullable();
            $table->unsignedBigInteger('second_animal_id')->nullable();
            $table->unsignedBigInteger('third_animal_id')->nullable();
            $table->text('content')->nullable();
            $table->unsignedBigInteger('garde_id')->nullable();
            $table->integer('number_visit')->nullable();
            $table->string('phone')->nullable();
            $table->string('mail')->nullable();
           /* $table->unsignedBigInteger('user_id'); pas besoin je crois */
            $table->unsignedBigInteger('proposal_id')->nullable();
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
