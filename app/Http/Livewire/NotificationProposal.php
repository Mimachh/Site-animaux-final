<?php

namespace App\Http\Livewire;


use App\Models\Demande;
use Livewire\Component;
use App\Models\Proposal;
use Illuminate\Http\Request;

class NotificationProposal extends Component
{
    
    public $notifications;
   
  
   

    public function mount()
    {
        $this->notifications = auth()->user()->unreadNotifications;
    
    }

    public function marked()
    {
        auth()->user()->unreadNotifications->markAsRead();
     
    }

    public function render()
    {
        return view('livewire.notification-proposal');
    }
}
