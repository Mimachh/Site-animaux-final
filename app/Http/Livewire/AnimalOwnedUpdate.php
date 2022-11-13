<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\annonces;
use App\Models\Espece_animaux;
use App\Http\Livewire\AnimalOwnedForm;

class AnimalOwnedUpdate extends AnimalOwnedForm
{
    public $ids;
    public function edit($id)
    {
        $annonce = annonces::where('id', $id)->first();
        $this->nom = $annonce->name;
        $this->personnalité = $annonce->personnality;
        $this->race = $annonce->race;
        $this->espece = $annonce->espece;
        $this->chats = $annonce->male_cats;
        $this->chattes = $annonce->female_cats;
        $this->chiens = $annonce->male_dogs;
        $this->chiennes = $annonce->female_dogs;
        $this->rongeurs = $annonce->male_rongeurs;
        $this->rongeuses = $annonce->female_rongeurs;
        $this->birds = $annonce->birds;
        $this->reptiles = $annonce->reptiles;


    }

    public function update()
    {
        $this->validate([
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
        
        if($this->ids)
        {
            $annonce = annonces::find($this->ids);
            $annonce->update([
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
        }
    }
    
    
    public function render()
    {
        $especes = Espece_animaux::select('id', 'espece')->where('id', '<', 9 )->get();

        return view('livewire.animal-owned-update', ["especes"=>$especes]);
    }
}
