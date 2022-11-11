<div class="py-12">
        <div class=" sm:px-6 lg:px-8 opacity-80">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               
                <div class="flex justify-around">  
                   
                @if($currentPage === 1)
                <button type="button"  wire:click='goToPageFav'><h2 class="ml-5 mt-5 font-semibold text-lg text-blue-800" >Mes favoris</h2></button>
                @else()
                <button type="button"  wire:click='goToPageFav'><h2 class="ml-5 mt-5 font-semibold text-lg text-gray-800" >Mes favoris</h2></button>
                @endif
                
                @if($currentPage === 2)
                <button type="button" wire:click='goToPageAds'><h2 class="ml-5 mt-5 font-semibold text-lg text-blue-800">Mes annonces</h2></button>
                @else()
                <button class="bg-blue" type="button" wire:click='goToPageAds'><h2 class=" ml-5 mt-5 font-semibold text-lg text-gray-800">Mes annonces</h2></button>
                @endif

                @if($currentPage === 3)
                <button type="button" wire:click='goToPageMess'><h2 class="ml-5 mt-5 font-semibold text-lg text-blue-800">Mes messages</h2></button>
                @else()
                <button type="button" wire:click='goToPageMess'><h2 class="ml-5 mt-5 font-semibold text-lg text-gray-800">Mes messages</h2></button>
                @endif
                
                @if($currentPage === 4)
                <button type="button" wire:click='goToPageGardes'><h2 class="ml-5 mt-5 font-semibold text-lg text-blue-800">Mes gardes réalisées</h2></button>    
                @else()
                <button type="button" wire:click='goToPageGardes'><h2 class="ml-5 mt-5 font-semibold text-lg text-gray-800">Mes gardes réalisées</h2></button>    
                @endif
            
            </div>
              <hr class="my-5 mx-5 border border-2 border-gray-400">
            <div class="">   
              @if($currentPage === 1)
                @foreach(auth()->user()->fav as $fav)
                <div class="px-3 py-5 mb-3 mr-32 ml-5 shadow-sm hover:shadow-md rounded border border-gray-200">
                    <div class="flex justify-between">
                        <h2 class="text-md font-bold text-gray-600">{{$fav->name}}</h2>
                        <button class="h-5 w-5 text-red-400 focus:outline-none" wire:click="add_fav">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="{{ $fav->fav_added() ? 'red' : 'white'}}" viewBox="0 0 24 24"  stroke="red" >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                        </button>
                    </div>
                   <p class="text-sm text-gray-600 pb-2">Disponible du : <span class="text-md text-gray-800">{{$fav->start_watch}}</span>  au : <span class="text-md text-gray-800">{{$fav->end_watch}} </span></p>
                   <p class="text-sm text-gray-600 pb-2"> Ville : {{ $fav->ville }}</p>
                    
                    <p class="text-sm text-gray-600 pb-2">Type de garde :
                        @if ($fav->garde_type == 1)
                        <span class="text-sm text-gray-800">Au domicile du Pet-Sitter</span> 
                        @elseif ($fav->garde_type == 2)
                        <span class="text-sm text-gray-800">En visite à votre domicile</> 
                        @elseif ($fav->garde_type == 3)
                        <span class="text-sm text-gray-800"> En visite et chez le Pet-Sitter</span>
                        @endif
                    </p>
                        
                    <p class="text-sm text-gray-600 pb-2">Animaux gardés :  </p>    
                    <p class="text-sm text-gray-600 pb-2">Prix : <span class="text-sm text-gray-800">{{ number_format($fav->price, 2, ',', '') }} €/jour.</span></p>     
                    <div class="flex items-center">
                        <span class="h-2 w-2 bg-green-600 rounded-full mr-1"></span>
                        <a class="text-sm" href="">Voir l'annonce</a>
                    </div> 
                </div>
                @endforeach
                @endif
                
                @if($currentPage === 2)
               
                @foreach(auth()->user()->ads as $ad)
                    <div class="px-3 py-5 mb-3 mr-32 ml-5 shadow-sm hover:shadow-md rounded border border-gray-200">
                        <div class="flex justify-between">
                            <h2 class="text-md font-bold text-gray-600">{{$ad->name}}</h2>
                            @if($ad->user_id !== auth()->user()->id)
                            <button class="h-5 w-5 text-red-400 focus:outline-none" wire:click="add_fav">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="{{ $ad->fav_added() ? 'red' : 'white'}}" viewBox="0 0 24 24"  stroke="red" >
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </button>
                            @endif
                        </div>
                        <p class="text-sm text-gray-600 pb-2">Disponible du : <span class="text-md text-gray-800">{{$ad->start_watch}}</span>  au : <span class="text-md text-gray-800">{{$ad->end_watch}} </span></p>
                        <p class="text-sm text-gray-600 pb-2"> Ville : {{ $ad->ville }}</p>
                            
                            <p class="text-sm text-gray-600 pb-2">Type de garde :
                                @if ($ad->garde_type == 1)
                                <span class="text-sm text-gray-800">Au domicile du Pet-Sitter</span> 
                                @elseif ($ad->garde_type == 2)
                                <span class="text-sm text-gray-800">En visite à votre domicile</> 
                                @elseif ($ad->garde_type == 3)
                                <span class="text-sm text-gray-800"> En visite et chez le Pet-Sitter</span>
                                @endif
                            </p>
                                
                            <p class="text-sm text-gray-600 pb-2">Animaux gardés :  </p>    
                            <p class="text-sm text-gray-600 pb-2">Prix : <span class="text-sm text-gray-800">{{ number_format($ad->price, 2, ',', '') }} €/jour.</span></p>     
                            <div class="flex items-center">
                                <span class="h-2 w-2 bg-green-600 rounded-full mr-1"></span>
                                <a class="text-sm" href="">Voir l'annonce</a>
                            </div> 
                    </div>
                @endforeach
                @endif
            </div>
        </div>
</div>
