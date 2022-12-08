<?php

namespace App\Http\Livewire;


use App\Models\Demande;
use Livewire\Component;
use App\Models\Proposal;

class NotificationProposal extends Component
{
    public function index()
    {

    }

    public $notifications;
   
  
   

    public function mount()
    {
        $this->notifications = auth()->user()->unreadNotifications;
    
    }

    public function marked()
    {
        $user = auth()->user();
        $user->unreadNotifications->markAsRead();
     
    }

    public function render()
    {
        return view('livewire.notification-proposal');
    }
}
