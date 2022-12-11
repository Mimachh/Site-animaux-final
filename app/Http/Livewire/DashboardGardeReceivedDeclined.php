<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DashboardGardeReceivedDeclined extends Component
{
    public $annonces;

    public function mount()
    {
 
    $this->annonces = auth()->user()->ads;
    
    $ads = $this->annonces;

    }
    
    public function render()
    {
        return view('livewire.dashboard-garde-received-declined');
    }
}
