<?php

namespace App\Http\Livewire\Annonces;

use App\Models\Garde;
use App\Models\Ville;
use App\Models\Espece;
use App\Models\Annonce;
use Livewire\Component;
use App\Models\Exterieur;
use App\Models\Habitation;
use Livewire\WithFileUploads;
use App\View\Components\Flash;

class CreateAnnonce extends Component
{
  use Flash;

  use WithFileUploads;

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
                $this->villes = Ville::where('ville_nom', 'like', $words)
                ->orWhere('ville_departement', 'like', $words)
                ->orWhere('ville_code_postal', 'like', $words)
                ->orWhere('ville_nom_simple', 'like', $words)
                ->get();
            
            }   
  }

  /* Validation du formulaire */

 
 protected $rules =  [
          
   
   
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
    'photo' => 'image',
    'ville' => 'required',
    'hab' => 'required',
    'ext' => 'required',
     
  ];
 
 

  public $price;

  public $garde;
  public $prix;
  
  public $ville_id;

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

  public $photo;

  public $habs;
  public $exts;
  public $hab;
  public $ext;

  public function mount()
  {
      $this->gardes = Garde::all();
      $this->habs = Habitation::all();
      $this->exts = Exterieur::all();  
      $this->chats_id = Espece::find(1);
      $this->chiens_id = Espece::find(2);
      $this->poissons_id  = Espece::find(3);
      $this->rongeurs_id = Espece::find(4);
      $this->oiseaux_id = Espece::find(5);
      $this->reptiles_id = Espece::find(6);
      $this->ferme_id = Espece::find(7);
      $this->autre_id = Espece::find(8);
  }

  public function store()
  {   
    $this->validate();
    $this->name = auth()->user()->name;
    $this->user_id = auth()->user()->id;
    
    $prix = $this->prix * 100;
    $name_file = md5($this->photo . microtime()).'.'.$this->photo->extension();
    $this->photo->storeAs('annonces_photos', $name_file);

     $annonces=Annonce::create([
         
        'garde_id' => $this->garde,
        'ville_id' => $this->ville,
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
        'price' => $prix,
        'name' => $this->name,
        'user_id' => $this->user_id,
        'photo' => $name_file,
        'habitation_id' => $this->hab,
        'exterieur_id' => $this->ext,
      ]);

     
      self::message('success', 'Ton annonce est bien enregistrée !.');
      return redirect()->route('annonces.show', $annonces->id);

  }

    public function render()
    {
        return view('livewire.annonces.create-annonce');
    }
}
