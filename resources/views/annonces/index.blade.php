<x-app-layout>
   
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Les annonces en ligne') }}
        </h1>
    </x-slot>

        @section('content')
        <h1 class="text-3xl text-green-500 mb-3">coucou</h1>
        
        <div class="md:flex-wrap md:flex md:mx-32 xs:mx-auto">
        @foreach($annonces as $annonce)
        <!-- Card horizontale -->
            <!--
        <div class="px-3 py-5 mb-3 mx-10 shadow-sm hover:shadow-md rounded border-2 border-gray-300">
            <h2 class="text-xl font-bold text-green-800">{{ $annonce->name }}</h2>
            <p class="text-md text-gray-600">Disponible du : {{$annonce->start_watch}} au : {{$annonce->end_watch}} </p>
            <p class="text-md text-gray-600"> Ville : {{ $annonce->ville }}</p>
            
            <p class="text-md text-gray-600">Type de garde :
                @if ($annonce->garde_type == 1)
                   <span class="text-md text-gray-800">Au domicile du Pet-Sitter</span> 
                @elseif ($annonce->garde_type == 2)
                   <span class="text-md text-gray-800">En visite à votre domicile</> 
                @elseif ($annonce->garde_type == 3)
                   <span class="text-md text-gray-800"> En visite et chez le Pet-Sitter</span>
                @endif
            </p>
            
            <p class="text-md text-gray-600">Animaux gardés :  </p>
            <p class="text-md text-gray-600">Prix : {{ number_format($annonce->price, 2, ',', '') }} €/jour.</p>
                
            <div class="flex items-center">
                <span class="h-2 w-2 bg-green-600 rounded-full mr-1"></span>
                <a href="">Consulter l'annonce</a>
            </div>
            
        </div>
            -->
        <!-- Fin Card horizontale -->

        <!-- Card verticale -->
        
        <div class="lg:flex mx-auto mb-5 max-w-sm md:max-w-sm lg:max-w-xs rounded shadow-sm hover:shadow-lg border-2 border-gray-300">
            <div class="">
                <div class="px-1 py-1">
                    <img class="w-full" src="/resources/views/images/clin.jpg" alt="Sunset in the mountains">
                </div>
                <div class="px-2 py-4">
                    <h2 class="text-xl font-bold text-green-800 pb-2">{{ $annonce->name }}</h2>
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
        
        @endforeach
        </div> 
        @endsection

              

</x-app-layout>