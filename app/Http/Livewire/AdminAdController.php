<?php

namespace App\Http\Livewire;

use App\Models\Annonce;
use Livewire\Component;

class AdminAdController extends Component
{
    public $annonces;

    public function mount()
    {
        $this->annonces = Annonce::all();
    }
    
    public function index()
    {
        return view('admin.ads_list');
    }

    public function render()
    {
        return view('livewire.admin-ad-controller');
    }
}
