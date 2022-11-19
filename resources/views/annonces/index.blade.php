<x-app-layout>
   
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Les annonces en ligne') }}
        </h1>
    </x-slot>

        
        <div class="md:flex-wrap md:flex md:mx-32 xs:mx-auto mt-5">
            <div class="bg-white">
                <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                    
                    <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                 
      
                        @foreach($annonces as $annonce)
   
                              

                        <!-- Card verticale -->
        
       
        

                        <div class="group border px-2 py-3 rounded shadow hover:shadow-lg">
                                        
                                        <a href="{{ route('annonces.show', $annonce) }}">
                                            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
                                                <img src="/images/clin.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
                                            </div>
                                        </a>
                                       
                                        <div class="flex justify-between mt-4">
                                            <a href="{{ route('annonces.show', $annonce) }}">
                                                <h2 class="text-lg text-semibold text-gray-700">{{ $annonce->name }}</h2>
                                            </a>
                                        
                                            <livewire:ad-fav :annonce="$annonce">
                                            
                                        </div>

                                        <a href="{{ route('annonces.show', $annonce) }}">

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
                                        
                                            <p class="text-sm text-gray-600 pb-2">Animaux gardés :
                                                <p class="text-sm text-gray-800">{{ $annonce->chats ? 'Chats' : ''}}
                                                     {{ $annonce->chiens ? ' Chiens' : ''}} 
                                                     {{ $annonce->poissons ? ' Poissons' : ''}}
                                                     {{ $annonce->rongeurs ? ' Rongeurs' : ''}} 
                                                     {{ $annonce->oiseaux ? ' Oiseaux' : ''}} 
                                                     {{ $annonce->reptiles ? ' Reptiles' : ''}} 
                                                     {{ $annonce->ferme ? ' Animaux de la ferme' : ''}}

                                                </p>
                                            </p>   
                                        </a>    
                                            <div class="flex items-center mt-2">
                                                <span class="flex h-2 w-2 bg-red-600 rounded-full mr-2"></span>
                                                <a class="text-sm" href="{{ route('annonces.show', $annonce) }}">Consulter l'annonce</a>
                                            </div> 
                                        
                        </div>
             

                           
        
                        @endforeach
   
                    </div> 
                    {{$annonces->links()}}
                </div>
            </div>
        </div>
        

              

</x-app-layout>