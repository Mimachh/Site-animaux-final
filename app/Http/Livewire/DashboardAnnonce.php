<?php

namespace App\Http\Livewire;

use App\Models\Annonce;
use Livewire\Component;

class DashboardAnnonce extends Component
{
     public $annonces;
    public $confirmingAnnonceDeletion = false;
  
    public function mount()
   {
 
    $this->annonces = auth()->user()->ads;
    $ads = $this->annonces;
    
    /*$ad_id = $ads[0]["id"];
        
    dd($ad_id);*/
   }

   public function confirmAnnonceDeletion()
   {
    $this->confirmingAnnonceDeletion = true;
   }

   public function deleteAnnonce($id)
   {
    if($id) {
      $record = Annonce::where('id', $id);
      $record->delete();
      return redirect()->route('dasboard');
    }
    $this->confirmingAnnonceDeletion = false;
   } 

    public function render()
    {
        $ads = auth()->user()->ads;

        return view('livewire.dashboard-annonce', ['ads' => $ads]);
    }
}
