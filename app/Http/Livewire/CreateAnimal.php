<?php

namespace App\Http\Livewire;

use App\Models\Animal;
use Livewire\Component;
use App\Models\Liste_race;
use App\Models\Espece_animaux;

class CreateAnimal extends Component
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

public function store()
{
    $this->user_id = auth()->user()->id;

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
        'user_id' => 'required',
   ]);
   $animals = Animal::create([
       
     
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
        'user_id' => $this->user_id,
        
    ]);
   

    return redirect()->route('animals.show', $animals->id);

   
 
    }

    public function render()
    {
        
        
        $especes = Espece_animaux::select('id', 'espece')->where('id', '<', 9 )->get();

        return view('livewire.create-animal', ["especes"=>$especes]);
    }
}
