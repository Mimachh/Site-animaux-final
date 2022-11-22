<?php

namespace App\Http\Livewire;
use App\Models\user;
use App\Models\Annonce;
use Livewire\Component;



use App\Models\annonce_user;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DashboardPages extends Component
{
   use AuthorizesRequests;

    public $annonces;
    public $confirmingAnnonceDeletion = false;
  

    /* Séparation des pages */

    public $currentPage = 1;
    public $pages = [1=>1, 2=>2, 3=>3, 4=>4];

    public function goToPageFav()
      {
      $this->currentPage = 2;
      }
    public function goToPageAds()
      {
        $this->currentPage = 1;
      }
    public function goToPageMess()
      {
        $this->currentPage = 3;
      }
    public function goToPageGardes()
      {
        $this->currentPage = 4;
      }
  
    /* Fin séparation des pages */

    public function mount()
    {
 
    $this->annonces = auth()->user()->ads;
    $ads = $this->annonces;
    
    }

    /* Suppression de mes annonces */

    public function confirmAnnonceDeletion()
    {
      $this->confirmingAnnonceDeletion = true;
    }

    
    public function delete($annonce)
    {
      $annonce = Annonce::where('id', $annonce)->get();
      $ad = $annonce[0]['user_id'];
      $user = auth()->user()->id;
      
      
      if($ad === $user) {
        Annonce::destroy($annonce);
      
        $this->confirmingAnnonceDeletion = false;
        $this->emit('flash', 'Votre annonce a bien été supprimée ! :(', 
        'error');
      }
      
      
    }

    /*
    public function destroy($id)
    {
        if($id) {
          $record = Annonce::where('id', $id);
          $record->delete();
        }
    }
     Je le garde en exemple au cas ou*/

    /* Fin suppression de mes annonces */


    
   
    public function render()
    {
      $ads = auth()->user()->ads;
      $favs = auth()->user()->fav;
    
        
        return view('livewire.dashboard-pages', ['ads' => $ads, 'favs' => $favs]);
    }
}
