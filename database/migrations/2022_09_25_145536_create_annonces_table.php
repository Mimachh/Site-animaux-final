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

            $table->string('user_name');
            /* $table->foreign('user_name')->references('name')->on('users'); */ 

            $table->timestamp('free_on'); /** voir pour calendrier */
            
            $table->string('city-where'); /** relier au city de la table users? */
            $table->boolean('visit');
            $table->boolean('home');

            $table->boolean('watch_cat');
            $table->boolean('watch_dog');
            $table->boolean('watch_rabbit');
            $table->boolean('watch_bird');
            $table->boolean('watch_reptile');
            $table->boolean('watch_farm_animal');
            $table->boolean('watch_other_animal');

            $table->text('description')->nullable();
            
            $table->integer('my_animal_id')->nullable();
            /* $table->foreign('my_animal_id')->references('id')->on('my_animal'); */

            $table->string('posted_by');
            /* $table->foreign('posted_by')->references('id')->on('users'); */

            /**Photo du clebs */

            $table->decimal('price', $precision = 4 );

            $table->timestamps();
        });

        
        Schema::table('annonces', function (Blueprint $table) {
           
            
    
            
            $table->foreign('my_animal_id')->references('id')->on('animals_owneds');
            $table->foreign('user_name')->references('name')->on('users');
            $table->foreign('posted_by')->references('id')->on('users');
    
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
