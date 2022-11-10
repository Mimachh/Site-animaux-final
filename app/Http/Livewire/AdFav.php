<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;


class AdFav extends Component
{
    public $annonce;


    public function add_fav()
    {
       auth()->user()->fav()->toggle($this->annonce->id);
       return redirect()->route('annonces');

    }

    
    public function render()
    {
        return view('livewire.ad-fav');
      
    }
}
