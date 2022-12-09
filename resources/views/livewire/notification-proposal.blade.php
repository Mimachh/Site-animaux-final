        
            <div class="text-center mb-1" style="color: #cbd5e0">
               
            <a class="text-sm" href="{{ route('markRead') }}"> Marqué les notifications comme lues</@> 
           

        @foreach($notifications as $notification)

            <x-jet-dropdown-link class="bg-red-800 rounded-lg mb-1" wire:click="marked" href="{{ route('proposals.show', $notification->data['proposal_id']) }}" style="color: #cbd5e0">
                <!-- Notification demande reçue -->
                    @if($notification->type === 'App\Notifications\ProposalRecieved')
                       Vous avez reçu une demande de garde de la part de {{ $notification->data['user_name'] }} !
                        
                    
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
            </x-jet-dropdown-link>
                 
        @endforeach
        </div>

      
 



