<x-app-layout>
   
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Les annonces en ligne') }}
        </h1>
    </x-slot>

        @section('content')
        <h1 class="text-3xl text-green-500 mb-3">coucou</h1>
        

        @foreach($annonces as $annonce)
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
        @endforeach
        @endsection

</x-app-layout>