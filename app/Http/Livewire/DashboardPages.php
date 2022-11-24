<?php

namespace App\Http\Livewire;

use App\Models\Animal;
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
    public $confirmingAnimalDeletion = false;
  

    /* Séparation des pages */

    public $currentPage = 1;
    public $pages = [1=>1, 2=>2, 3=>3, 4=>4];

    public function goToPageAds()
      {
        $this->currentPage = 1;
      }
    public function goToPageFav()
      {
      $this->currentPage = 2;
      }
      public function goToPageAnim()
      {
        $this->currentPage = 3;
      }
    public function goToPageMess()
      {
        $this->currentPage = 4;
      }
    public function goToPageGardes()
      {
        $this->currentPage = 5;
      }
  
    /* Fin séparation des pages */

    public function mount()
    {
 
    $this->annonces = auth()->user()->ads;
    $ads = $this->annonces;
    
    }

   
    /* Suppression de mes annonces */

    public function confirmAnnonceDeletion($annonce)
    {
      $annonce = Annonce::where('id', $annonce)->get();
      $this->confirmingAnnonceDeletion = true;
      
    }


    
    public function delete($id)
    {
      $annonce = Annonce::where('id', $id)->get();
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


    /* Suppression des animaux */

    public function confirmAnimalDeletion()
    {
      $this->confirmingAnimalDeletion = true;
    }

    
    public function deleteAnimal($animal)
    {
      $animal = Animal::where('id', $animal)->get();
      $an = $animal[0]['user_id'];
      $user = auth()->user()->id;
      
      
      if($an === $user) {
        Animal::destroy($animal);
      
        $this->confirmingAnimalDeletion = false;
        $this->emit('flash', 'La fiche de votre animal a bien été supprimée ! :(', 
        'error');
      }
      
      
    }

    /* Fin suppression des animaux */
   
   
    public function render()
    {
      $ads = auth()->user()->ads;
      $favs = auth()->user()->fav;
      $animals = auth()->user()->animals;
    
        
        return view('livewire.dashboard-pages', ['ads' => $ads, 'favs' => $favs, 'animals' => $animals]);
    }
}
