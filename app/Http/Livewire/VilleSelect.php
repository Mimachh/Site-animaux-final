<?php

namespace App\Http\Livewire;

use Livewire\Request;
use Livewire\Component;
use App\Models\annonces;
use App\Models\villes_france;
use App\Http\Requests\AdStore;

class VilleSelect extends Component
{

    /* Barre de data-list */

        public $ville='';
        public $villes = [];
       

   public function updatedVille()
   {
        $words = '%' . $this->ville . '%';

        if(strlen($this->ville) > 2) 
            {
                $this->villes = villes_france::where('ville_nom', 'like', $words)
                ->orWhere('ville_departement', 'like', $words)
                ->orWhere('ville_code_postal', 'like', $words)
                ->orWhere('ville_nom_simple', 'like', $words)
                ->get();
            
            }
    
        
    }

    /* Validation du formulaire */

   
   
    
    protected $rules = [

        'ville' => 'required',
       
    ];
    

    public function submit()
    {
        $this->validate();

       annonces::create([
            'ville' => $this->ville,
        ]);

        return redirect()->route('create.ad'); 
     
    }
   

   
    /* Rendu visuel */

    public function render()
    {
        
            
            
             return view('livewire.ville-select'); 
            
               
        
    }
}
