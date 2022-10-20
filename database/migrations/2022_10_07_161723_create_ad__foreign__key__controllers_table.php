<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdForeignKeyControllersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
       Schema::table('users', function ($table) {
            $table->foreign('animal_owned_id')->references('id')->on('animals_owneds')->onDelete('cascade');
            /* $table->foreign('ads_posted')->references('id')->on('annonces')->onDelete('cascade'); */
            $table->foreign('city')->references('ville_id')->on('villes_france');
            
        });

        Schema::table('animals_owneds', function(Blueprint $table) {
            $table->foreign('owned_by')->references('id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('espece')->references('id')->on('especes_animaux');
        });

        Schema::table('annonces', function(Blueprint $table) {
            $table->foreign('city-where')->references('ville_id')->on('villes_france');
            $table->foreign('my_animal_id')->references('id')->on('animals_owneds')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('animaux_gardes')->references('id')->on('especes_animaux')
            ->onDelete('cascade')
            ->onUpdate('cascade'); 
        });


        Schema::table('liste_race', function(Blueprint $table) {
            $table->foreign('espece_id')->references('id')->on('especes_animaux'); 
        
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->dropForeign('users_animal_owned_id_foreign');
            $table->dropForeign('users_ads_posted_foreign');
            $table->dropForeign('users_city_foreign');
        });

        Schema::table('animals_owneds', function(Blueprint $table) {
            $table->dropForeign('animals_owneds_owned_by_foreign');
        });

        Schema::table('annonces', function(Blueprint $table) {
            $table->dropForeign('annonces_city-where_foreign');
            $table->dropForeign('annonces_my_animal_idforeign');
        });
    }
}
