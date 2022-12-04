<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proposal;

class GardePage extends Component
{
    public $annonces;

    public function mount()
    {
        $this->annonces = auth()->user()->ads;
    }

    public function index()
    {
        return view('proposals.index');
    }
    
    public function show(Proposal $proposal)
    {

        return view('proposals.show', compact('proposal'));
    }

    public function render()
    {
        return view('livewire.garde-page');
    }
}
