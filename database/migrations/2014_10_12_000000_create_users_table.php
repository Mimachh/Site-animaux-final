<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
            $table->boolean('civility')->nullable();
            $table->date('birth_date')->nullable();
            $table->boolean('sex')->nullable();
            $table->string('city')->nullable();

            $table->string('animal_owned_id')->nullable();
            //**$table->foreign('animal_owned_id')->references('id')->on('animals_owneds');
            /** je peux appeler ma clÃ© pareil que le tableau? */
        
            $table->string('ads_posted')->nullable();
            /** $table->foreign('ads_posted')->references('id')->on('annonces'); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
