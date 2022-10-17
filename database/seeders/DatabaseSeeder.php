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
            ['race_chien' => 'Colley à poil long'],
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
 
            ['race_chat' => 'Chat de gouttière',
             'chat_id' => '1'],
            ['race_chat' => 'Chat de race',
             'chat_id' => '1'],
            
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



        DB::table('liste_race')->insert([
 
            ['race_animal' => 'Chat de gouttière',
             'espece_id' => '1'],
            ['race_animal' => 'Chat de race',
            'espece_id' => '1'],

            ['race_animal' => 'Beagle',
            'espece_id' => '2'],
            ['race_animal' => 'Berger Allemand',
            'espece_id' => '2'],
            ['race_animal' => 'Berger Australien',
            'espece_id' => '2'],
            ['race_animal' => 'Berger des Shetland',
            'espece_id' => '2'],
            ['race_animal' => 'Bichon',
            'espece_id' => '2'],
            ['race_animal' => 'Border Collie',
            'espece_id' => '2'],
            ['race_animal' => 'Bouledogue Français',
            'espece_id' => '2'],
            ['race_animal' => 'Bouvier Bernois',
            'espece_id' => '2'],
            ['race_animal' => 'Caniche',
            'espece_id' => '2'],
            ['race_animal' => 'Cairn Terrier',
            'espece_id' => '2'],
            ['race_animal' => 'Carlin',
            'espece_id' => '2'],
            ['race_animal' => 'Cavalier King Charles Spaniel',
            'espece_id' => '2'],
            ['race_animal' => 'Chien de ferme Dano-Suéduois',
            'espece_id' => '2'],
            ['race_animal' => 'Finnois de Laponie',
            'espece_id' => '2'],
            ['race_animal' => 'Chihuahua',
            'espece_id' => '2'],
            ['race_animal' => 'Colley à poil long',
            'espece_id' => '2'],
            ['race_animal' => 'Coton de Tuléar',
            'espece_id' => '2'],
            ['race_animal' => 'Dalmatien',
            'espece_id' => '2'],
            ['race_animal' => 'Golden Retriever',
            'espece_id' => '2'],
            ['race_animal' => 'Husky de Sibérie',
            'espece_id' => '2'],
            ['race_animal' => 'Jack Russell',
            'espece_id' => '2'],
            ['race_animal' => 'Labrador Retriever',
            'espece_id' => '2'],
            ['race_animal' => 'Loulou de Poméranie',
            'espece_id' => '2'],
            ['race_animal' => 'Retriever',
            'espece_id' => '2'],
            ['race_animal' => 'Rhodesian Ridgeback',
            'espece_id' => '2'],
            ['race_animal' => 'Rottweiler',
            'espece_id' => '2'],
            ['race_animal' => 'Samoyède',
            'espece_id' => '2'],
            ['race_animal' => 'Setter Anglais',
            'espece_id' => '2'],
            ['race_animal' => 'Shih Tzu',
            'espece_id' => '2'],
            ['race_animal' => 'Staffordshire Bull Terrier',
            'espece_id' => '2'],
            ['race_animal' => 'Teckel',
            'espece_id' => '2'],
            ['race_animal' => 'Whippet/Levrier',
            'espece_id' => '2'],
            ['race_animal' => 'Yorkshire Terrier',
            'espece_id' => '2'],

            ['race_animal' => 'Poisson',
            'espece_id' => '3'],

            ['race_animal' => 'Lapin',
            'espece_id' => '4'],
            ['race_animal' => 'Hamster',
            'espece_id' => '4'],
            ['race_animal' => 'Gerbille',
            'espece_id' => '4'],
            ['race_animal' => 'Souris/Rat',
            'espece_id' => '4'],
            ['race_animal' => 'Chincilla',
            'espece_id' => '4'],
            ['race_animal' => 'Furet',
            'espece_id' => '4'],


            ['race_animal' => 'Perruche',
            'espece_id' => '5'],
            ['race_animal' => 'Perroquet',
            'espece_id' => '5'],
            ['race_animal' => 'Cacatoès',
            'espece_id' => '5'],
            ['race_animal' => 'Canaris',
            'espece_id' => '5'],
            ['race_animal' => 'Colombe',
            'espece_id' => '5'],
            ['race_animal' => 'Tourterelle',
            'espece_id' => '5'],

            ['race_animal' => 'Serpent',
            'espece_id' => '6'],
            ['race_animal' => 'Caméléon',
            'espece_id' => '6'],
            ['race_animal' => 'Tortue',
            'espece_id' => '6'],
            ['race_animal' => 'Gecko',
            'espece_id' => '6'],
            ['race_animal' => 'Lézard',
            'espece_id' => '6'],

            ['race_animal' => 'Cheval',
            'espece_id' => '7'],
            ['race_animal' => 'Âne',
            'espece_id' => '7'],
            ['race_animal' => 'Poule/Oie',
            'espece_id' => '7'],
            ['race_animal' => 'Vache/Veau/Taureau',
            'espece_id' => '7'],





        
             
            
        ]);


    
    }
}
