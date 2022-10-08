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

        DB::table('especes_animaux')->insert([
 
            ['espece' => 'chats'],
            ['espece' => 'chiens'],
            ['espece' => 'poissons'],
            ['espece' => 'rongeurs'],
            ['espece' => 'oiseaux'],
            ['espece' => 'reptiles'],
            ['espece' => 'animaux de la ferme'],
            ['espece' => 'autre'],
        ]);

        DB::table('garde_types')->insert([
 
            ['garde_type' => 'home'],
            ['garde_type' => 'visit'],
            
        ]);

        DB::table('race_chiens')->insert([
 
            ['race_chien' => 'Beagle'],
            ['race_chien' => 'Berger Allemand'],
            ['race_chien' => 'Berger Australien'],
            ['race_chien' => 'Berger des Shetland'],
            ['race_chien' => 'Bichon'],
            ['race_chien' => 'Border Collie'],
            ['race_chien' => 'Bouledogue Français'],
            ['race_chien' => 'Bouvier Bernois'],
            ['race_chien' => 'Caniche'],
            ['race_chien' => 'Cairn Terrier'],
            ['race_chien' => 'Carlin'],
            ['race_chien' => 'Cavalier King Charles Spaniel'],
            ['race_chien' => 'Chien de ferme Dano-Suéduois'],
            ['race_chien' => 'Finnois de Laponie'],
            ['race_chien' => 'Chihuahua'],
            ['race_chien' => 'Colley à poil lon'],
            ['race_chien' => 'Coton de Tuléar'],
            ['race_chien' => 'Dalmatien'],
            ['race_chien' => 'Golden Retriever'],
            ['race_chien' => 'Husky de Sibérie'],
            ['race_chien' => 'Jack Russell'],
            ['race_chien' => 'Labrador Retriever'],
            ['race_chien' => 'Loulou de Poméranie'],
            ['race_chien' => 'Retriever'],
            ['race_chien' => 'Rhodesian Ridgeback'],
            ['race_chien' => 'Rottweiler'],
            ['race_chien' => 'Samoyède'],
            ['race_chien' => 'Setter Anglais'],
            ['race_chien' => 'Shih Tzu'],
            ['race_chien' => 'Staffordshire Bull Terrier'],
            ['race_chien' => 'Teckel'],
            ['race_chien' => 'Whippet/Levrier'],
            ['race_chien' => 'Yorkshire Terrier'],
            
        ]);

        DB::table('race_chats')->insert([
 
            ['race_chat' => 'Chat de gouttière'],
            ['race_chat' => 'Chat de race'],
            
        ]);

        DB::table('race_rongeurs')->insert([
 
            ['race_rongeur' => 'Lapin'],
            ['race_rongeur' => 'Hamster'],
            ['race_rongeur' => 'Gerbille'],
            ['race_rongeur' => 'Souris/Rat'],
            ['race_rongeur' => 'Chinchilla'],
            ['race_rongeur' => 'Furet'],
            
        ]);

        DB::table('race_oiseaux')->insert([
 
            ['race_oiseau' => 'Perruche'],
            ['race_oiseau' => 'Perroquet'],
            ['race_oiseau' => 'Cacatoès'],
            ['race_oiseau' => 'Canaris'],
            ['race_oiseau' => 'Colombe'],
            ['race_oiseau' => 'Tourterelle'],
        ]);

        DB::table('race_reptiles')->insert([
 
            ['race_reptile' => 'Serpent'],
            ['race_reptile' => 'Caméléon'],
            ['race_reptile' => 'Tortue'],
            ['race_reptile' => 'Gecko'],
            ['race_reptile' => 'Lézard'],
            
        ]);

        DB::table('animaux_fermes')->insert([
 
            ['race_animaux_ferme' => 'Cheval'],
            ['race_animaux_ferme' => 'Âne'],
            ['race_animaux_ferme' => 'Poule/Oie'],
            ['race_animaux_ferme' => 'Vache/Veau/Taureau'],     
            
        ]);
    }
}
