<?php

namespace App\Http\Livewire;

use App\Models\Garde;
use App\Models\Espece;
use App\Models\Annonce;
use Livewire\Component;
use App\View\Components\Flash;

class CreateAnnonce extends Component
{
  use Flash;
    /* Séparation des pages */

    public $currentPage = 1;
    public $pages = [1=>1, 2=>2, 3=>3];

    public function goToPreviousPages()
      {
        $this->currentPage--;
      }
    public function goToNextPages()
      {
        $this->currentPage++;
      }





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

 
 protected $rules =  [
          
    'user_id' => 'required',
    'name' => 'required',
    'garde' =>'required',
    'chats' => 'nullable',
    'chiens' => 'nullable',
    'poissons' => 'nullable',
    'rongeurs' => 'nullable',
    'oiseaux' => 'nullable',
    'reptiles' => 'nullable',
    'ferme' => 'nullable',
    'autre' => 'nullable',

    'description' => 'required',
    'prix' => 'required',

    'start_watch' => 'nullable',
    'end_watch' => 'nullable',
     
  ];
 
  
  
 
  public $user_id;
  public $name;

  public $price;

  public $garde;
  public $prix;
  

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


  public $start_watch;
  public $end_watch;

  public function mount()
  {
     

      $name = auth()->user()->name;
      $user_id = auth()->user()->id;

    /* Animals */

        $chats_id = Espece::find(1);
        $this->chats = $this->chats_id;

        $chiens_id = Espece::find(2);
        $this->chiens = $this->chiens_id;

        $poissons_id = Espece::find(3);
        $this->poissons = $this->poissons_id;

        $rongeurs_id = Espece::find(4);
        $this->rongeurs = $this->rongeurs_id;

        $oiseaux_id = Espece::find(5);
        $this->oiseaux = $this->oiseaux_id;

        $reptiles_id = Espece::find(6);
        $this->reptiles = $this->reptiles_id;

        $ferme_id = Espece::find(7);
        $this->ferme = $this->ferme_id;

        $autre_id = Espece::find(8);
        $this->autre = $this->autre_id;

    /* Fin animaux */

  }

  public function store()
  {   
    $this->user_id = auth()->user()->id;
    $this->validate();
   
     $annonces=Annonce::create([
         
        'garde_id' => $this->garde,
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
        'price' => $this->prix,
        'name' => $this->name,
        'user_id' => $this->user_id,
      ]);
     
      self::message('success', 'Ton annonce est bien enregistrée !.');
      return redirect()->route('annonces.show', $annonces->id);

  }

    public function render()
    {
        $gardes = Garde::all();
     
        $this->name = auth()->user()->name;
        $this->user_id = auth()->user()->id;
       
        $this->chats_id = Espece::find(1);
        $this->chiens_id = Espece::find(2);
        $this->poissons_id  = Espece::find(3);
        $this->rongeurs_id = Espece::find(4);
        $this->oiseaux_id = Espece::find(5);
        $this->reptiles_id = Espece::find(6);
        $this->ferme_id = Espece::find(7);
        $this->autre_id = Espece::find(8);

        return view('livewire.create-annonce', ["gardes"=>$gardes]);
    }
}
