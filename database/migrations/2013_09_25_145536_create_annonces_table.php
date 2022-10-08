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
            
            $table->unsignedBigInteger('city-where')->nullable(); 
            $table->string('garde_type')->nullable();
            $table->string('animaux_gardes')->nullable();
            $table->text('description')->nullable();  
            $table->unsignedBigInteger('my_animal_id')->nullable();
            $table->decimal('price', $precision = 4 )->nullable();

            $table->timestamps();


            /*
            $table->string('visit')->nullable(); 
            $table->string('home')->nullable();
            
            $table->string('start_watch')->nullable();
            $table->string('end_watch')->nullable();

            $table->string('watch_cat')->nullable();
            $table->string('watch_dog')->nullable();
            $table->string('watch_rabbit')->nullable();
            $table->string('watch_bird')->nullable();
            $table->string('watch_reptile')->nullable();
            $table->string('watch_farm_animal')->nullable();
            $table->string('watch_other_animal')->nullable();
            */

            
            

            /**Photo du clebs */

           
          
           
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
