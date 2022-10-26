<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\annonces;
use App\Models\Garde_type;
use App\Models\villes_france;


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

   
   protected function rules()
   {
    return [
        'ville' => 'required',     
        'user_id' => 'required',
       'visit' => 'nullable',
       'home' => 'nullable',
       'type_id' => 'required',
    ];
   }
    
    
   
    public $user_id;

    public $visit='';
    public $home='';

    public $garde_type=[];
    public $type_id;

    public function mount()
    {
        $garde_type = Garde_type::all(); 
        $this->type_id = $this->garde_type;

    }

    public function submit()
    {
        

       $annonces=annonces::create([
            'ville' => $this->ville,
            'home' => $this->home,
            'visit' => $this->visit,
            'garde_type' => $this->garde_type
          
        ]);
       
        
        $annonces->user_id = auth()->user()->id;
       
        $annonces->save();
       
        

     
    }
   

   
    /* Rendu visuel */

    public function render()
    {
        $this->garde_type= Garde_type::all();
      
            
             return view('livewire.ville-select'); 
            
               
        
    }
}
