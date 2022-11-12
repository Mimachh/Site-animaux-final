  

    <!-- Card verticale -->
        
       
        

         <div class="group border px-2 py-3 rounded shadow hover:shadow-lg">
                        
                        <a href="#">
                            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
                                <img src="/images/clin.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
                            </div>
                        </a>
                        
                        <div class="flex justify-between mt-4">
                            <a href="">
                                <h2 class="text-lg text-semibold text-gray-700">{{ $annonce->name }}</h2>
                            </a>
                          
                                <button class="h-5 w-5 text-red-400 focus:outline-none" wire:click="add_fav">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="{{ $annonce->fav_added() ? 'red' : 'white'}}" viewBox="0 0 24 24"  stroke="currentColor" >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </button>
                            
                        </div>

                        <a href="">

                            <p class="my-1 text-lg font-medium text-gray-900 pb-3">{{ number_format($annonce->price, 2, ',', '') }} €/jour</p>
                            <p class="text-sm text-gray-600 pb-3">Disponible du : <span class="text-md text-gray-800">{{$annonce->start_watch}}</span>  au : <span class="text-md text-gray-800">{{$annonce->end_watch}} </span></p>
                            <p class="text-sm text-gray-600 pb-3"> Ville : {{ $annonce->ville }}</p>
                    
                            <p class="text-sm text-gray-600 pb-3">Type de garde :
                                @if ($annonce->garde_type == 1)
                                <span class="text-sm text-gray-800">Au domicile du Pet-Sitter</span> 
                                @elseif ($annonce->garde_type == 2)
                                <span class="text-sm text-gray-800">En visite à votre domicile</> 
                                @elseif ($annonce->garde_type == 3)
                                <span class="text-sm text-gray-800"> En visite et chez le Pet-Sitter</span>
                                @endif
                            </p>
                        
                            <p class="text-sm text-gray-600 pb-3">Animaux gardés :  </p>    
                            
                            <div class="flex items-center">
                                <span class="flex h-2 w-2 bg-red-600 rounded-full mr-2"></span>
                                <a class="text-sm" href="">Consulter l'annonce</a>
                            </div> 
                        </a>
        </div>
             
