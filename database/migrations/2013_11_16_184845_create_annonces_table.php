<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            
            $table->unsignedBigInteger('ville_id')->onDelete('cascade')->nullable(); 

            $table->boolean('status')->default(1);
            
            $table->date('start_watch')->nullable();
            $table->date('end_watch')->nullable();
            
            $table->unsignedBigInteger('garde_id')->nullable();

            $table->unsignedBigInteger('chats')->nullable();
            $table->unsignedBigInteger('chiens')->nullable();
            $table->unsignedBigInteger('poissons')->nullable();
            $table->unsignedBigInteger('rongeurs')->nullable();
            $table->unsignedBigInteger('oiseaux')->nullable();
            $table->unsignedBigInteger('reptiles')->nullable();
            $table->unsignedBigInteger('ferme')->nullable();
            $table->unsignedBigInteger('autre')->nullable();

            $table->text('description')->nullable();  
            $table->unsignedBigInteger('my_animal_id')->nullable();
            $table->decimal('price', $precision = 4 )->nullable();
            $table->unsignedBigInteger('user_id')->onDelete('cascade');
            $table->timestamps();          
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annonces');
    }
}
