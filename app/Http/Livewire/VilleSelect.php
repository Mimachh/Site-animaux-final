<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\annonces;
use App\Models\Espece_animaux;
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
        'name' => 'required',

       /*'visit_id' => 'nullable',
       'home_id' => 'nullable',
       'home' => ['array','nullable'],
       'visit' => 'nullable',*/
       
       'chats' => 'nullable',
       'chiens' => 'nullable',
       'poissons' => 'nullable',
       'rongeurs' => 'nullable',
       'oiseaux' => 'nullable',
       'reptiles' => 'nullable',
       'ferme' => 'nullable',
       'autre' => 'nullable',

       'description' => 'required',
       'price' => 'required',

       'start_watch' => 'nullable',
       'end_watch' => 'nullable',

       'type_id' => 'required',
    ];
   }
    
    
   
    public $user_id;


    public $garde_type;
    public $type_id;

    public $chats;
    public $chats_id;

    public $chiens;
    public $chiens_id;

    public $poissons;
    public $poissons_id;

    public $rongeurs;
    public $rongeurs_id;

    public $oiseaux;
    public $oiseaux_id;

    public $reptiles;
    public $reptiles_id;

    public $ferme;
    public $ferme_id;

    public $autre;
    public $autre_id;

    public $description;

    public $price;

    public $start_watch;
    public $end_watch;

    public function mount()
    {
        $garde_type = Garde_type::all(); 
        $this->type_id = $this->garde_type;
       

      


        /* Animals */

        $chats_id = Espece_animaux::find(1);
        $this->chats = $this->chats_id;

        $chiens_id = Espece_animaux::find(2);
        $this->chiens = $this->chiens_id;

        $poissons_id = Espece_animaux::find(3);
        $this->poissons = $this->poissons_id;

        $rongeurs_id = Espece_animaux::find(4);
        $this->rongeurs = $this->rongeurs_id;

        $oiseaux_id = Espece_animaux::find(5);
        $this->oiseaux = $this->oiseaux_id;

        $reptiles_id = Espece_animaux::find(6);
        $this->reptiles = $this->reptiles_id;

        $ferme_id = Espece_animaux::find(7);
        $this->ferme = $this->ferme_id;

        $autre_id = Espece_animaux::find(8);
        $this->autre = $this->autre_id;

    }

    public function submit()
    {
       
        

       
        

       
       $annonces=annonces::create([
           
          /*'garde_type' => $this->garde_type, Celui là marche pas..*/
            'start_watch' => $this->start_watch,
            'end_watch' => $this->end_watch,
            'chats' => $this->chats,
            'chiens' => $this->chiens,
            'oiseaux' => $this->oiseaux,
            'poissons' => $this->poissons,
            'rongeurs' => $this->rongeurs,
            'ferme' => $this->ferme,
            'autre' => $this->autre,
            'reptiles' => $this->reptiles,
            'description' => $this->description,
            'price' => $this->price,
        ]);
       
        $annonces->garde_type = $this->garde_type;
        $annonces->user_id = auth()->user()->id;
        $annonces->name = auth()->user()->name;
       
        $annonces->save();
       
        

     
    }
   

   
    /* Rendu visuel */

    public function render()
    {
        $this->type_id= Garde_type::all();
       
        $this->chats_id = Espece_animaux::find(1);
        $this->chiens_id = Espece_animaux::find(2);
        $this->poissons_id  = Espece_animaux::find(3);
        $this->rongeurs_id = Espece_animaux::find(4);
        $this->oiseaux_id = Espece_animaux::find(5);
        $this->reptiles_id = Espece_animaux::find(6);
        $this->ferme_id = Espece_animaux::find(7);
        $this->autre_id = Espece_animaux::find(8);
        
             return view('livewire.ville-select'); 
            
               
        
    }
}
