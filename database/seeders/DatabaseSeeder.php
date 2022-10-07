<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('animaux_a_garders')->insert([
 
            ['espece' => 'chats'],
            ['espece' => 'chiens'],
            ['espece' => 'rongeurs'],
            ['espece' => 'oiseaux'],
            ['espece' => 'reptiles'],
            ['espece' => 'animaux de la ferme'],
            ['espece' => 'autre'],
        ]);
    }
}
