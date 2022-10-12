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
            $table->foreign('city')->references('ville_id')->on('villes_france_free');
            
        });

        Schema::table('animals_owneds', function(Blueprint $table) {
            $table->foreign('owned_by')->references('id')->on('users')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
            $table->foreign('espece')->references('id')->on('especes_animaux');
        });

        Schema::table('annonces', function(Blueprint $table) {
            $table->foreign('city-where')->references('ville_id')->on('villes_france_free');
            $table->foreign('my_animal_id')->references('id')->on('animals_owneds')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('especes_animaux', function(Blueprint $table) {
            $table->foreign('race')->references('id')->on('race_chiens', 'race_chats', 'race_rongeurs');
           

        });

        Schema::table('race_chiens', function(Blueprint $table) {
            $table->foreign('chien_id')->references('id')->on('especes_animaux');
        
        });

        Schema::table('race_chats', function(Blueprint $table) {
            $table->foreign('chat_id')->references('id')->on('especes_animaux');
        
        });

        Schema::table('race_rongeurs', function(Blueprint $table) {
            $table->foreign('rongeur_id')->references('id')->on('especes_animaux');
        
        });

        Schema::table('race_oiseaux', function(Blueprint $table) {
            $table->foreign('oiseau_id')->references('id')->on('especes_animaux');
        
        });

        Schema::table('race_reptiles', function(Blueprint $table) {
            $table->foreign('reptile_id')->references('id')->on('especes_animaux');
        
        });

        Schema::table('animaux_fermes', function(Blueprint $table) {
            $table->foreign('animaux_ferme_id')->references('id')->on('especes_animaux');
        
        });

        Schema::table('race_other_animaux', function(Blueprint $table) {
            $table->foreign('other_animal_id')->references('id')->on('especes_animaux');
        
        });

        Schema::table('liste_races', function(Blueprint $table) {
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
