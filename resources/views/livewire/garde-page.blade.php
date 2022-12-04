<!-- Demandes envoyées -->
    <div class="mt-5">
        <h2 class="ml-5 text-md font-bold text-gray-600 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
            Vos demandes de garde envoyées ({{auth()->user()->proposals->count()}})
        </h2>

        @forelse(auth()->user()->proposals as $proposal)
            <div class="px-3 py-5 mb-3 mt-4 mr-4 md:mr-32 ml-5 shadow-sm hover:shadow-md rounded border border-gray-200"> 
                <div class="flex justify-between">
                    <h2 class="text-md font-bold text-gray-600 mb-2">{{ $proposal->annonce->name}}</h2>
                </div>
                <div>
                    <p class="text-md font-semi-bold text-gray-600 mb-2">{{ $proposal->annonce->getRealPrice()}} / jour</p>
                    <p class="text-md font-semi-bold text-gray-600 mb-2">Soit un total pour la garde de : {{ $proposal->demande->prix_final / 100 }}€ </p>
                    @if($proposal->validated === 1)
                        <p class="text-sm text-gray-600 mb-2"> Demande acceptée ! </p>
                    @else
                        <p class="text-sm text-red-600 mb-2"> Demande en attente de validation ...</p>
                    @endif
                </div>
                <div class="flex items-center">
                    <span class="h-2 w-2 bg-green-600 rounded-full mr-1"></span>
                        <a class="text-sm" href="">Voir la demande en détail</a>
                </div>
        
            </div>
        @empty
            <div class="px-3 py-5 mb-3 mr-4 md:mr-32 lg:mr-32 ml-5">
                <div class="flex justify-between pb-2">
                    <p class="text-md font-normal text-gray-800">Vous n'avez envoyé aucune demande de garde pour l'instant. </p>
                </div>
            </div>
                                    
        @endforelse
    </div> 
<!-- Fin demandes envoyées -->
                        
<!-- Demandes reçues -->
    <div>
        @if(auth()->user()->ads->count() > 0)
            <h2 class="ml-5 text-md font-bold text-gray-600 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
                Vos demandes de garde reçues
            </h2>
        @endif

        @foreach($annonces as $annonce)
                                    
                                        
            @foreach($annonce->proposals as $prop)
                <div class="px-3 py-5 mb-3 mt-4 mr-4 md:mr-32 ml-5 shadow-sm hover:shadow-md rounded border border-gray-200">    
                    <div class="justify-between">
                        <h2 class="text-md font-bold text-gray-600 mb-2">Demande envoyée par {{ $prop->user->name}}</h2>
                        @if(isset($prop->demande->first_animal))
                            <p class="text-md text-gray-600 mb-2">Pour garder {{ $prop->demande->first_animal->animal_name}} son/sa {{ $prop->demande->first_animal->race->race_animal}}. </p>
                        @endif
                        @if(isset($prop->demande->second_animal))
                            <p class="text-md text-gray-600 mb-2">Pour garder {{ $prop->demande->second_animal->animal_name}} son/sa {{ $prop->demande->second_animal->race->race_animal}}. </p>
                        @endif
                        @if(isset($prop->demande->third_animal))
                            <p class="text-md text-gray-600 mb-2">Pour garder {{ $prop->demande->third_animal->animal_name}} son/sa {{ $prop->demande->third_animal->race->race_animal}}. </p>
                        @endif
                        <p class="text-md text-gray-600 mb-2">{{ $prop->demande->garde->garde}}</p>
                        <p class="text-md font-semi-bold text-gray-600 mb-2">Pour un total de {{$prop->getPriceWithoutCom()}} </p>
                    </div>
                    <div>
                        @if($prop->validated)
                            <p class="text-sm text-gray-600 mb-2"> Demande acceptée ! </p>
                        @else
                            <p class="text-sm text-red-600 mb-2"> Demande en attente de validation ...</p>
                        @endif
                    </div>
                    <div class="flex items-center">
                        <span class="h-2 w-2 bg-green-600 rounded-full mr-1"></span>
                        <a class="text-sm" href="{{ route('proposals.show', $prop) }}">Voir la demande en détail</a>
                    </div>    
                </div>
            @endforeach
        @endforeach 
                                                               
    </div> 
<!-- Fin demandes reçues -->
