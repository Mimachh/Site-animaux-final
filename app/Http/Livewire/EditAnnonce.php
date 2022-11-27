<?php

namespace App\Http\Livewire;

use App\Models\Garde;
use App\Models\Ville;
use App\Models\Espece;
use App\Models\Annonce;

use Livewire\Component;
use App\View\Components\Flash;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class EditAnnonce extends Component
{
    use Flash;
    use AuthorizesRequests;
    
    public $annonce;

    

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

    
    public $user_id, $name, $price, $garde, $prix, $chats, 
           $chats_id, $chiens, $chiens_id, $poissons, $poissons_id,
           $rongeurs, $rongeurs_id, $oiseaux, $oiseaux_id, $reptiles,
           $reptiles_id, $ferme, $ferme_id, $autre, $autre_id, $description, 
           $start_watch, $end_watch, $garde_type, $gardes;

    public function mount()
        {
            $this->gardes = Garde::all();
            $this->name = auth()->user()->name;
            $this->user_id = auth()->user()->id;
         
            /* Animals */
         
            $this->chats_id = Espece::find(1);
            $this->chiens_id = Espece::find(2);
            $this->poissons_id  = Espece::find(3);
            $this->rongeurs_id = Espece::find(4);
            $this->oiseaux_id = Espece::find(5);
            $this->reptiles_id = Espece::find(6);
            $this->ferme_id = Espece::find(7);
            $this->autre_id = Espece::find(8);
         
            /* Fin animaux */    
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        
        $ids = $this->annonce->id;
        $this->authorize('update', $this->annonce);
    

        $this->validate([
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

        ]);

        $update = Annonce::find($ids)->update([
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

        self::message('success', 'La modification a bien été enregistrée !');
        return redirect()->route('annonces.show', $ids);
    }
    

    
    public function render()
    {
        $ids = $this->annonce->id;
        $infos = Annonce::find($ids);
        
        
        /*$this->garde = $infos->garde_type;
        $this->start_watch_upd = $infos->start_watch;
        $this->end_watch_upd = $infos->end_watch;
        $this->chats = $infos->chats;
        $this->chiens = $infos->chiens;
        $this->oiseaux = $infos->oiseaux;
        $this->poissons = $infos->poissons;
        $this->rongeurs = $infos->rongeurs;
        $this->ferme = $infos->ferme;
        $this->autre = $infos->autre;
        $this->reptiles = $infos->reptiles;
        J'enlève pour l'instant car sinon on ne peux pas editer le formulaire*/

        $this->description = $infos->description;
        $this->prix = $infos->price;
        
       
        
       


        return view('livewire.edit-annonce');
    }
}
