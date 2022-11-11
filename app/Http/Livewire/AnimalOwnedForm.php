<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Liste_race;
use App\Models\animals_owned;
use App\Models\Espece_animaux;


class AnimalOwnedForm extends Component
{

    /* Séparation des pages */

    public $currentPage = 1;
    public $pages = [1=>1,
                    2=>2];

   public function goToPreviousPages()
   {
    $this->currentPage--;
   }
   public function goToNextPages()
   {
    $this->currentPage++;
   }

/* Début du formulaire */
protected function rules()
   {
    return [
        'animal_name' => 'required',
        'personnality' => 'nullable',
        'espece' => 'required',
        'male_dogs' => 'required',
        'female_dogs' => 'required',
        'male_cats' => 'required',
        'female_cats' => 'required',
        'male_rongeurs' => 'required',
        'female_rongeurs' => 'required',
        'birds' => 'required',
        'reptiles' => 'required',
        'owner' => 'required',
    
    ];
   }

    /* Validation du formulaire */

   public $nom;

   public $personnalité;

   public $chiens;
   public $chiennes;

   public $chats;
   public $chattes;

   public $rongeurs;
   public $rongeuses;

   public $birds;

   public $reptiles;

   public $owner;


   /* FAIRE LES ESPECES */

/* Fin du formulaire */


public $espece_id;
public $race_id;
public $races;

public function mount()
{
    $this->races = collect();

}

public function updatedEspeceId($newValue)
{
    $this->races = Liste_race::where('espece_id', $newValue)->orderBy('race_animal')->get();
}

    public function submit()
    {
       
       $my_animal=animals_owned::create([
           
         
            'animal_name' => $this->nom,
            'personnality' => $this->personnalité,
            'male_dogs' => $this->chiens,
            'female_dogs' => $this->chiennes,
            'male_cats' => $this->chats,
            'female_cats' => $this->chattes,
            'male_rongeurs' => $this->rongeurs,
            'female_rongeurs' => $this->rongeuses,
            'birds' => $this->birds,
            'reptiles' => $this->reptiles,
            
        ]);
       
        $my_animal->owner = auth()->user()->id;
        
       
        $my_animal->save();

        return redirect()->route('annonces');

       
        

     
    }
   

   
    /* Rendu visuel */

    public function render()
    {
        
        $especes = Espece_animaux::select("id", "espece")->get();
        return view('livewire.animal-owned-form', ['especes' => $especes]); 
            
               
        
    }
}
   
