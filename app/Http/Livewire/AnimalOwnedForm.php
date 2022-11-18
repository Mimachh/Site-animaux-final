<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Annonce;
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
    /* Fin séparation page */

    /* Début du formulaire */
        

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

    
    public $espece;
    
    public $race;
   


    /* FAIRE LES ESPECES */

  


    
    public $races;

    public function mount()
    {
        $this->races = collect();


    }

    public function updatedEspece($newValue)
    {
        $this->races = Liste_race::where('espece_id', $newValue)->orderBy('race_animal')->get();
    }

    public function submit()
    {
       $validated =$this->validate([
            'nom' => 'required',
            'personnalité' => 'nullable',
            'espece' => 'required',
            'race' => 'required',
            'chiens' => 'nullable',
            'chiennes' => 'nullable',
            'chats' => 'nullable',
            'chattes' => 'nullable',
            'rongeurs' => 'nullable',
            'rongeuses' => 'nullable',
            'birds' => 'nullable',
            'reptiles' => 'nullable',
            'owner' => 'required',
       ]);
       animals_owned::create([
           
         
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
            'espece' =>$this->espece,
            'race' => $this->race,
            'owner' => $this->owner,
            
        ]);
       

        return redirect()->route('annonces');

       
        

     
    }
   
  /* Fin du formulaire */
   
    /* Rendu visuel */

    public function render()
    {
        $this->owner = auth()->user()->id;
        
        $especes = Espece_animaux::select('id', 'espece')->where('id', '<', 9 )->get();

        return view('livewire.animal-owned-form', ["especes"=>$especes]); 
            
               
        
    }
}
   
