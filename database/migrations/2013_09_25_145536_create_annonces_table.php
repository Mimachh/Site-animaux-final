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
            
            $table->unsignedBigInteger('ville')->nullable(); 
            
            $table->date('start_watch')->nullable();
            $table->date('end_watch')->nullable();

            $table->string('visit', 100)->nullable();
            $table->string('home', 100)->nullable();

            $table->string('garde_type', 100)->nullable();

            $table->string('chats', 100)->nullable();
            $table->string('chiens', 100)->nullable();
            $table->string('poissons', 100)->nullable();
            $table->string('rongeurs', 100)->nullable();
            $table->string('oiseaux', 100)->nullable();
            $table->string('reptiles', 100)->nullable();
            $table->string('ferme', 100)->nullable();
            $table->string('autre', 100)->nullable();

            $table->text('description')->nullable();  
            $table->unsignedBigInteger('my_animal_id')->nullable();
            $table->decimal('price', $precision = 4 )->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
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
