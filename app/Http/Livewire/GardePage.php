<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proposal;


class GardePage extends Component
{
    
    
    public $annonces;
    public $proposals;
    public function mount()
    {
        $this->annonces = auth()->user()->ads;
    }

    /* Séparation des pages */

        public $currentPage = 1;
        public $pages = [1=>1, 2=>2, 3=>3, 4=>4];

        public function goToPageGardNoValidated()
        {
            $this->currentPage = 1;
        }
        public function goToPageGardValidated()
        {
        $this->currentPage = 2;
        }
        public function goToPageGardDone()
        {
            $this->currentPage = 3;
        }
        public function goToPageGardAsked()
        {
            $this->currentPage = 4;
        }
        public function goToPageGardes()
        {
            $this->currentPage = 5;
        }
  
    /* Fin séparation des pages */

    public function index()
    {
        
        return view('proposals.index');
    }
    
    public function show(Proposal $proposal)
    {

       /* $notifications = auth()->user()->notifications;
        foreach($notifications as $notification)
        {
            $id = $notification->data;
            $propo = Proposal::where('id', $id)->get();
            $demande = $propo[0]->demande;
        }
        
        dd($demande); */

        return view('proposals.show', compact('proposal'));
    }

    public function render()
    {
        return view('livewire.garde-page');
    }
}
