<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\villes_france;

class VilleSelect extends Component
{

   
   
   public $query ='';
   public $villes = [];

   public function updatedQuery()
   {
    $words = '%' . $this->query . '%';

    if(strlen($this->query) > 2) {
        $this->villes = villes_france::where('ville_nom', 'like', $words)
        ->orWhere('ville_departement', 'like', $words)
        ->orWhere('ville_code_postal', 'like', $words)
        ->orWhere('ville_nom_simple', 'like', $words)
        ->get();
    }
   
   }
    


    public function render()
    {
        
            
            
            
            return view('livewire.ville-select'); 
               
        
    }
}
