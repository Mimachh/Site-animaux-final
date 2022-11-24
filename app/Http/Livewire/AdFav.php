<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Annonce;
use Livewire\Component;
use Illuminate\Support\Facades\Session;


class AdFav extends Component
{


    public $annonce;


    public function add_fav()
    {
      if(auth()->check()) {

        auth()->user()->fav()->toggle($this->annonce->id);
        $this->emit('flash', 'Favoris mis à jour.', 
        'success'); 
        
        
       /* return redirect()->route('annonces.index'); Apparemment plus besoin ça marche sans */
      }
      else {
        
        $this->emit('flash', 'Vous devez être connecté pour ajouter un favori', 
        'error');       
      }
     
    }

   
    
    public function render()
    {
        return view('livewire.ad-fav');
      
    }
}
