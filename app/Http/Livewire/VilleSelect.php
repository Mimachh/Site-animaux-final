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
            
        'user_id' => 'required',
       'visit_id' => 'nullable',
       'home_id' => 'nullable',
       'home' => ['array','nullable'],
       'visit' => 'nullable',
       
    ];
   }
    
    
   
    public $user_id;

    public $visit;
    public $visit_id;

    public $home;
    public $home_id;

    public $garde_type=[];
    public $type_id='';

    public function mount()
    {
        $garde_type = Garde_type::all(); 
        $this->type_id = $this->garde_type;

        $visit = Garde_type::find(2);
        $this->visit_id = $this->visit;

        $home = Garde_type::find(1);
        $this->home_id = $this->home;

    }

    public function submit()
    {
       
       


       $annonces=annonces::create([
           
            'home' => $this->home_id,
            'visit' => $this->visit_id,
            
          
        ]);
       
        
        $annonces->user_id = auth()->user()->id;
       
        $annonces->save();
       
        

     
    }
   

   
    /* Rendu visuel */

    public function render()
    {
        $this->garde_type= Garde_type::all();
        $this->visit = Garde_type::find(2);
        $this->home = Garde_type::find(1);
            
             return view('livewire.ville-select'); 
            
               
        
    }
}
