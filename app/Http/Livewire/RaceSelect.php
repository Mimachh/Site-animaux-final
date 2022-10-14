<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Espece_animaux;
use App\Models\Liste_race;

class RaceSelect extends Component
{
    public $espece_id;
    public $races;
    public $race_id;
    

    public function mount() {
        $this->races = collect();
        
    }

    public function updatedRacesId ($newValue) {
        $this->races = liste_race::where('espece_id', $newValue)->get();
        
    }
  

    public function render()
    {
        $especes = Espece_animaux::select('id', 'espece')->get();
        
        return view('livewire.race-select', [
            'especes_animaux' => $especes]);
    }
  
}
