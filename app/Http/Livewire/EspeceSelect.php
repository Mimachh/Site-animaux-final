<?php

namespace App\Http\Livewire;

use App\Models\Espece_animaux;
use App\Models\Liste_race;
use Livewire\Component;

class EspeceSelect extends Component
{
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

    public function render()
    {
        $especes = Espece_animaux::select("id", "espece")->get();
        return view('livewire.espece-select', ["especes"=>$especes]);
    }
}
