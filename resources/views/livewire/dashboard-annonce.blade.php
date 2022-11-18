@foreach($ads as $annonce)
                    <div class="px-3 py-5 mb-3 mr-4 md:mr-32 ml-5 shadow-sm hover:shadow-md rounded border border-gray-200">

                        <div class="flex md:justify-end mb-3 pr-10">
                            <a class="text-sm pr-10 items-center" href="{{ route('annonces.edit', $annonce) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="w-5 h-5 inline">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                                <p class="inline text-green-700">Modifier mon annonce</p>
                            </a>
                            <button wire:click="confirmAnnonceDeletion ({{ $annonce->id}})" wire:click="destroy({{ $annonce->id}})" type="button" class="text-sm pr-10 items-center text-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="w-5 h-5 inline-block">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Supprimer mon annonce
                            </button>                 
                        </div>
                        <div class="flex justify-between">
                            <h2 class="text-md font-bold text-gray-600 mb-2">{{$annonce->name}}</h2>
                            @if($annonce->user_id !== auth()->user()->id)
                                <button class="h-5 w-5 text-red-400 focus:outline-none" wire:click="add_fav">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="{{ $annonce->fav_added() ? 'red' : 'white'}}" viewBox="0 0 24 24"  stroke="red" >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </button>
                            @endif
                        </div>
                        <p class="text-sm text-gray-600 pb-2">Disponible du : <span class="text-md text-gray-800">{{$annonce->start_watch}}</span>  au : <span class="text-md text-gray-800">{{$annonce->end_watch}} </span></p>
                        <p class="text-sm text-gray-600 pb-2"> Ville : {{ $annonce->ville }}</p>
                                
                        <p class="text-sm text-gray-600 pb-2">Type de garde :
                            @if ($annonce->garde_type == 1)
                                <span class="text-sm text-gray-800">Au domicile du Pet-Sitter</span> 
                            @elseif ($annonce->garde_type == 2)
                                <span class="text-sm text-gray-800">En visite à votre domicile</> 
                            @elseif ($annonce->garde_type == 3)
                                <span class="text-sm text-gray-800"> En visite et chez le Pet-Sitter</span>
                            @endif
                        </p>
                                    
                        <p class="text-sm text-gray-600">Animaux gardés :  </p>
                        <ul class="text-sm text-gray-800 pb-2">
                            <li class="pb-1">{{ $annonce->chats ? 'Chats' : ''}}</li>
                            <li class="pb-1">{{ $annonce->chiens ? ' Chiens' : ''}} </li>
                            <li class="pb-1">{{ $annonce->poissons ? ' Poissons' : ''}}</li>
                            <li class="pb-1">{{ $annonce->rongeurs ? ' Rongeurs' : ''}}</li>
                            <li class="pb-1">{{ $annonce->oiseaux ? ' Oiseaux' : ''}}</li>                                <li class="pb-1">{{ $annonce->reptiles ? ' Reptiles' : ''}}</li>                                    <li class="pb-1">{{ $annonce->ferme ? ' Animaux de la ferme' : ''}}</li>
                        </ul>    
                        <p class="text-sm text-gray-600 pb-2">Prix : <span class="text-sm text-gray-800">{{ number_format($annonce->price, 2, ',', '') }} €/jour.</span></p>     
                        <div class="flex items-center">
                            <span class="h-2 w-2 bg-green-600 rounded-full mr-1"></span>
                            <a class="text-sm" href="{{ route('annonces.show', $annonce) }}">Voir mon annonce</a>
                        </div> 
                            
                    </div>               
                @endforeach
                @foreach($ads as $annonce)
                <x-jet-dialog-modal wire:model="confirmingAnnonceDeletion">
                    <x-slot name="title">
                        Supprimer mon annonce
                    </x-slot>

                    <x-slot name="content">
                        {{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                    </x-slot>

                    <x-slot name="footer">
                        <x-jet-secondary-button wire:click="$set('confirmingAnnonceDeletion')" wire:loading.attr="disabled">
                            Annuler
                        </x-jet-secondary-button>

                        <x-jet-danger-button class="ml-3" wire:click="deleteAnnonce ({{ $annonce->id}})" wire:loading.attr="disabled">
                            Supprimer l'annonce
                        </x-jet-danger-button>
                    </x-slot>
                </x-jet-dialog-modal>
                @endforeach
