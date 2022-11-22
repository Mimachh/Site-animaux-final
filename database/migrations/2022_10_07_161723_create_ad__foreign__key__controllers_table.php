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
            $table->foreign('city')->references('ville_id')->on('villes_france');
            
        });

        Schema::table('animals_owneds', function(Blueprint $table) {
            $table->foreign('owner')->references('id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('espece')->references('id')->on('especes_animaux');
            $table->foreign('race')->references('id')->on('liste_race');
        });
        Schema::table('animals', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('espece')->references('id')->on('especes_animaux');
            $table->foreign('race')->references('id')->on('liste_race');
        });

        Schema::table('annonces', function(Blueprint $table) {
       
            $table->foreign('ville_id')->references('id')->on('villes')->onDelete('cascade');

            $table->foreign('my_animal_id')->references('id')->on('animals_owneds')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           
            $table->foreign('chats')->references('id')->on('especes_animaux')
            ->onDelete('cascade')
            ->onUpdate('cascade'); 
            $table->foreign('chiens')->references('id')->on('especes_animaux')
            ->onDelete('cascade')
            ->onUpdate('cascade'); 
            $table->foreign('poissons')->references('id')->on('especes_animaux')
            ->onDelete('cascade')
            ->onUpdate('cascade'); 
            $table->foreign('rongeurs')->references('id')->on('especes_animaux')
            ->onDelete('cascade')
            ->onUpdate('cascade'); 
            $table->foreign('reptiles')->references('id')->on('especes_animaux')
            ->onDelete('cascade')
            ->onUpdate('cascade'); 
            $table->foreign('ferme')->references('id')->on('especes_animaux')
            ->onDelete('cascade')
            ->onUpdate('cascade'); 
            $table->foreign('autre')->references('id')->on('especes_animaux')
            ->onDelete('cascade')
            ->onUpdate('cascade'); 
            $table->foreign('oiseaux')->references('id')->on('especes_animaux')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('garde_id')->references('id')->on('gardes')
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
        Schema::table('users', function(Blueprint $table) 
        {
            $table->dropForeign('users_animal_owned_id_foreign');
            $table->dropForeign('users_city_foreign');
        });

        Schema::table('animals_owneds', function(Blueprint $table) 
        {
            $table->dropForeign('animals_owneds_owned_by_foreign');
            $table->dropForeign('animals_owneds_owner_foreign');
            $table->dropForeign('animals_owneds_espece_foreign');
            $table->dropForeign('animals_owneds_race_foreign');
        });

        Schema::table('annonces', function(Blueprint $table) 
        {
            $table->dropForeign('annonces_my_animal_id_foreign');
            $table->dropForeign('annonces_user_id_foreign');
            $table->dropForeign('annonces_chats_foreign');
            $table->dropForeign('annonces_chiens_foreign');
            $table->dropForeign('annonces_poissons_foreign');
            $table->dropForeign('annonces_rongeurs_foreign');
            $table->dropForeign('annonces_reptiles_foreign');
            $table->dropForeign('annonces_ferme_foreign');
            $table->dropForeign('annonces_autre_foreign');
            $table->dropForeign('annonces_oiseaux_foreign');
            $table->dropForeign('annonces_garde_type_foreign');
            $table->dropForeign('annonces_ville_foreign');
        });

        Schema::table('liste_race', function(Blueprint $table) {
            $table->dropForeign('liste_race_espece_id_foreign');
        });
    }
}