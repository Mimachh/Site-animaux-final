<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillesFrancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villes_france_free', function (Blueprint $table) {
            $table->id('ville_id');
            $table->string('ville_departement')->nullable();
            $table->string('ville_slug')->nullable();
            $table->string('ville_nom')->nullable();
            $table->string('ville_nom_simple')->nullable();
            $table->string('ville_nom_reel')->nullable();
            $table->string('ville_nom_soundex')->nullable();
            $table->string('ville_nom_metaphone')->nullable();
            $table->string('ville_code_postal')->nullable();
            $table->string('ville_commune')->nullable();
            $table->string('ville_code_commune')->nullable();
            $table->integer('ville_arrondissement')->nullable();
            $table->string('ville_canton')->nullable();
            $table->smallInteger('ville_amdi')->nullable();
            $table->mediumInteger('ville_population_2010')->nullable();
            $table->mediumInteger('ville_population_1999')->nullable();
            $table->mediumInteger('ville_population_2012')->nullable();
            $table->integer('ville_densite_2010')->nullable();
            $table->float('ville_surface')->nullable();
            $table->float('ville_longitude_deg')->nullable();
            $table->float('ville_latitude_deg')->nullable();
            $table->string('ville_longitude_grd')->nullable();
            $table->string('ville_latitude_grd')->nullable();
            $table->string('ville_longitude_dms')->nullable();
            $table->string('ville_latitude_dms')->nullable();
            $table->mediumInteger('ville_zmin')->nullable();
            $table->mediumInteger('ville_zmax')->nullable();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('villes_frances');
    }
}
