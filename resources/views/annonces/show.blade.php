<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-200 leading-tight text-center">
            Annonce de {{$annonce->name}}
        </h1>
    </x-slot>
    

<div class="pb-5">
    <div class="grid grid-cols-3 gap-4 mx-10 my-10 border rounded shadow hover:shadow-lg">
        <div class=" col-span-3 md:col-span-1">       
        <div class="mx-2 my-2 aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8 shadow-xl">
                <img class="object-cover object-center group-hover:opacity-75" src="{{ asset('storage/annonces_photos/' . $annonce->photo) }}">
            </div>
        </div>
        <!-- Partie description annonce -->
            <div class="md:col-span-2 col-span-3 pl-5">
                <div class="flex justify-between mt-4 mb-4 mr-10"> 
                    <h2 class="text-xl text-bold text-gray-700">Je m'appelle {{ $annonce->name }}</h2>                               
                    @if($annonce->user_id !== auth()->user()->id)
                        <livewire:ad-fav :annonce="$annonce">
                    @endif                                            
                </div>
                <!-- Dispo -->
                @if($annonce->start_watch && $annonce->end_watch !== null)
                    <div class="flex text-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                        </svg>
                        <p class="text-gray-600 pb-3 pl-4">
                            Je suis disponible du : <span class=" text-gray-800">{{date('d/m/Y', strtotime($annonce->start_watch))}}</span>  
                            au : <span class="text-gray-800">{{date('d/m/Y', strtotime($annonce->end_watch))}}</span>
                        </p>
                    </div>
                @endif
                <!-- Fin dispo -->
                <!-- Ville -->
                @if($annonce->ville_id !== null)
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="blue" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                        </svg>
                        <p class="text-gray-600 pl-4 pb-3">J'habite : <span class="text-gray-800"> {{ $annonce->ville->ville_nom }}</span></p>    
                    </div>
                @endif
                <!--Fin ville -->
                <!-- Type de garde -->
                <p class="text-gray-600 pb-3">Mon type de garde se fait :               
                    <span class="text-gray-800">{{$annonce->garde->garde}}</span>       
                </p>
                <!-- Fin type de garde -->
                <p class="text-gray-600 pb-2">Je garde :
                                                        
                    <p class="text-gray-800 mb-5">{{ $annonce->chats ? 'Chats' : ''}}
                        {{ $annonce->chiens ? ' Chiens' : ''}} 
                        {{ $annonce->poissons ? ' Poissons' : ''}}
                        {{ $annonce->rongeurs ? ' Rongeurs' : ''}} 
                        {{ $annonce->oiseaux ? ' Oiseaux' : ''}} 
                        {{ $annonce->reptiles ? ' Reptiles' : ''}} 
                        {{ $annonce->ferme ? ' Animaux de la ferme' : ''}}
                    </p>
                    @if(isset($watches[0]))
                        @foreach($watches as $watch)
                            @if(isset($watch[0]))
                                <div class="flex">
                                    <p class="mr-2">{{$watch[0]['espece']}}</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="w-5 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>         
                            @endif
                        @endforeach
                    @endif
                </p>
                <label for="description" class="my-1 font-medium text-gray-600 mt-6">Me concernant :</label> 
                <p class="text-gray-800 mb-5" id="description" name="description">{{ $annonce->description }}</p>
                                                          
                <div class="flex text-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 7.756a4.5 4.5 0 100 8.488M7.5 10.5h5.25m-5.25 3h5.25M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <label for="prix" class=" text-md font-medium text-gray-600 "> Mon tarif :</label>
                    <p class="font-medium text-gray-900 pb-3 ml-2" id="prix" name="prix">{{ number_format($annonce->price, 2, ',', '') }} €/jour</p>  
                </div>
                @if($annonce->user_id !== auth()->user()->id)
                <div class=" justify-center my-5">
                    <x-jet-button type="button" class="bg-blue-600"><a href="">Contacter</a></x-jet-button>   
                </div>                                       
                @endif 
            </div>
</div>
        <!-- Fin partie description annonce -->

        <!-- Animaux -->
        
        <div class="col-span-3 text-center">
            <h3 class="text-green-700 font-bold text-3xl pb-2">Je vous présente mes animaux </h3>
        </div>

        @forelse($animals as $animal)
        <div class="grid grid-cols-3 gap-4 mx-10 my-10 border rounded shadow hover:shadow-lg">
            <div class="md:col-span-2 col-span-3">
                <!-- Plaque d'immat -->
                <div class="grid place-items-center pt-1">
                    <div class="rounded-lg bg-white shadow-md hover:shadow-xl">
                        <div class="flex w-full rounded-lg border-4 border-black bg-yellow-500 shadow">
                            <label class="flex flex-col justify-between bg-blue-700 rounded-l p-4 text-2xl font-bold text-white">
                                <img class="h-4" src="https://cdn.cdnlogo.com/logos/e/51/eu.svg" />
                                <small class="text-xs text-center py-1">{{ $animal->espece->espece }}</small>
                                <small class="text-xs text-center">{{ $animal->race->race_animal}}</small>
                            </label>
                            <label class="p-4 font-mono text-5xl font-medium">{{$animal->animal_name}}</label>
                        </div>
                    </div>
                </div>
                <!-- Fin plaque -->
                    <div class="flex justify-between mt-4 mb-4 mr-10"> 
                        <h2 class="text-xl text-bold text-gray-700">{{ $animal->animal_name }}</h2>                                                                         
                    </div>
                    <label for="personnality" class="my-1 font-medium text-gray-600 mt-6">La personnalité de {{ $animal->animal_name }} :</label> 
                    <p class="text-gray-800 mb-5" id="personnality" name="personnality">{{ $animal->personnality }} </p>
       
                    <label for="age" class="my-1 font-medium text-gray-600 mt-6">Son âge :</label> 
                    <p class="text-gray-800 mb-5" id="age" name="age"> {{ $animal->age->age}}</p>
       
            </div>
            <div class="col-span-3 md:col-span-1">
                <div class="mx-2 my-2 aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8 shadow-md hover:shadow-xl">
                    <img class="object-cover object-center" src="{{ asset('storage/animals_photos/' . $animal->photo) }}">
                </div>
            </div>
        </div>
        @empty
            <div class="text-center">
                <small class="text-lg text-blue-900">Aucun animal renseigné</small>
            </div>
        @endforelse

        @if(isset($watches[0]))
            @foreach($watches as $watch)
                @if(isset($watch[0]))
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h1 class="ml-2">{{$watch[0]['espece']}}</h1>
                    </div>         
                @endif
            @endforeach
        @endif
       
        
       
</x-app-layout>