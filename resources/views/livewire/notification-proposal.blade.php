
<div class="text-white" x-data="{ open: false }">
    @if(auth()->user()->unreadNotifications->count() > 0)
        <button x-on:click="open = ! open"><span id="js-count">{{ auth()->user()->unreadNotifications->count()}}</span></button>
    @endif
   
    <div x-show="open">
        @foreach($notifications as $notification)
            <a wire:click="marked" href="{{ route('proposals.show', $notification->data['proposal_id']) }}" class="text-sm">
                
                <!-- Notification demande reçue -->
                    @if($notification->type === 'App\Notifications\ProposalRecieved')
                        Vous avez reçu une demande de garde de la part de {{ $notification->data['user_name'] }}
                        le {{ date('d/m/Y', strtotime($notification->data['when'])) }} pour garder {{ $notification->data['animal'] }}
                    
                <!-- Fin notification demande reçue -->
            

                <!-- Notification réponse à la demande -->
                    @elseif($notification->type === 'App\Notifications\ProposalResponse')
                        {{ $notification->data['annonce_user_name'] }} a répondu
                            @if($notification->data['proposal_response'] === 1)
                                positivement
                            @else
                                négativement
                            @endif
                            
                            à votre demande de garde.
                    @endif
                <!-- Fin notification réponse à la demande -->
            </a>      
        @endforeach
    </div>
        

</div>

