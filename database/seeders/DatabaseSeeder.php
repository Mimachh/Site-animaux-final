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
       

        DB::table('especes_animaux')->insert([
 
            ['espece' => 'Chats',
            'id' => '1'],
            ['espece' => 'Chiens',
            'id' => '2'],
            ['espece' => 'Poissons',
            'id' => '3'],
            ['espece' => 'Rongeurs',
            'id' => '4'],
            ['espece' => 'Oiseaux',
            'id' => '5'],
            ['espece' => 'Reptiles',
            'id' => '6'],
            ['espece' => 'Animaux de la ferme',
            'id' => '7'],
            ['espece' => 'Autre',
            'id' => '8'],
            ['espece' => 'Tous les animaux',
            'id' => '9'],
           
        ]);
        
        DB::table('garde_types')->insert([
 
            ['id'=>'1', 'garde_type' => 'Chez vous'],
            ['id'=>'2', 'garde_type' => 'Visite à domicile'],
            ['id'=>'3', 'garde_type' => 'Les deux'],
            
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

        DB::table('users')->insert([
            ['id' => '1', 'name' => 'Karl', 'email' => 'karl.m@gmail.com', 
            'password' => '$2y$10$ZaUzuL/yWyVcl8bCxhQ64OyOA/GrLJpfP9eThY7dfco29sZvgw.fK']
        ]);
    
    }
}
