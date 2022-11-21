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
                                            
                                            <!-- Dispo -->
                                            <p class="my-1 text-lg font-medium text-gray-900 pb-3">{{ number_format($annonce->price, 2, ',', '') }} €/jour</p>
                                            @if($annonce->start_watch && $annonce->end_watch !== null)
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                                </svg>
                                                <p class="text-sm text-gray-600 pb-3 pl-1">
                                                    Disponible du : <span class="text-md text-gray-800">{{date('d/m/Y', strtotime($annonce->start_watch))}}</span>  
                                                    au : <span class="text-md text-gray-800">{{date('d/m/Y', strtotime($annonce->end_watch))}}</span>
                                                </p>
                                            </div>
                                            @endif
                                            <!-- Fin dispo --> 
                                            <!-- Ville -->
                                            @if($annonce->ville_id !== null)
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="blue" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                                                </svg>
                                                <p class="text-sm text-gray-600 pl-1 pb-3"><span class="text-md text-gray-800"> Ville : {{ $annonce->ville->ville_nom }}</span></p>    
                                            </div>
                                            @endif
                                            <!--Fin ville -->
                                            <!-- Type de garde -->
                                            <p class="text-sm text-gray-600 pb-3">Type de garde :               
                                                <span class="text-sm text-gray-800">{{$annonce->garde->garde}}</span>       
                                            </p>
                                            <!-- Fin type de garde -->
                                            
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