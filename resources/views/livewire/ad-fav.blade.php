  

    <!-- Card verticale -->
        
        <div class="lg:flex mx-auto mb-5 max-w-sm md:max-w-sm lg:max-w-xs rounded shadow-sm hover:shadow-lg border-2 border-gray-300">
            <div>
                <div class="px-1 py-1">
                    <img class="w-full" src="/resources/views/images/clin.jpg" alt="Sunset in the mountains">
                </div>
                <div class="px-2 py-4">
                    <div class="flex justify-between">
                        <h2 class="text-xl font-bold text-green-800 pb-2">{{ $annonce->name }}</h2>
                        <button class="h-5 w-5 text-red-400 focus:outline-none" wire:click="add_fav">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="{{ $annonce->fav_added() ? 'red' : 'white'}}" viewBox="0 0 24 24"  stroke="currentColor" >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                        </button>
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
                        
                    <p class="text-sm text-gray-600 pb-2">Animaux gardés :  </p>    
                    <p class="text-sm text-gray-600 pb-2">Prix : <span class="text-sm text-gray-800">{{ number_format($annonce->price, 2, ',', '') }} €/jour.</span></p>     
                    <div class="flex items-center">
                        <span class="h-2 w-2 bg-green-600 rounded-full mr-1"></span>
                        <a class="text-sm" href="">Consulter l'annonce</a>
                    </div> 
                </div>
            </div>
        </div>
