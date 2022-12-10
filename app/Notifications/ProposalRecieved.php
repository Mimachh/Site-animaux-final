<?php

namespace App\Notifications;

use App\Mail\ProposalReceived;
use App\Models\Demande;
use App\Models\Proposal;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\BroadcastMessage;


class ProposalRecieved extends Notification
{
    use Queueable;

    public $proposal;
    public $demande;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Proposal $proposal, Demande $demande)
    {
        $this->proposal = $proposal;
        $this->demande = $demande;
        
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'broadcast', 'mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new ProposalReceived($this->proposal, $this->demande, $notifiable  ))
        ->to($notifiable->email);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'proposal_id' => $this->proposal->id,
            'user_name' => $this->proposal->user->name,
            'when' => $this->proposal->created_at,
            'animal' =>$this->demande->first_animal->animal_name,
            'demande' => $this->demande->id,
            
        ];
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'proposal_id' => $this->proposal->id,
            'user_name' => $this->proposal->user->name,
            'when' => $this->proposal->created_at,
            'animal' =>$this->demande->first_animal->animal_name,
            'demande' => $this->demande->id,
        ]);
    }
}
