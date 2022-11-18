<x-slot name="header">
    <h1 class="font-semibold text-xl text-gray-200 leading-tight">
        {{ __('Créer mon annonce de pet-sitter') }}
    </h1>
</x-slot>


<main class="bg-indigo-50 pt-5 rounded-3xl ">
    

        <x-jet-validation-errors class="mb-4 text-center" />

        <h2 class="text-center mb-10 py-5 font-semibold">Créer mon annonce de pet-sitter</h2>


        <!-- Début du formulaire  -->

            

        <div class="mt-10 sm:mt-2">
            <div class="md:grid md:grid-cols-6 md:gap-4 ">
        
                <div class="mt-5  md:col-start-2 md:col-span-4 md:mt-0">
                    <form wire:submit.prevent="update">
                    <input type="hidden" wire:model="ids">
                        <div class="overflow-hidden shadow sm:rounded-md mb-10 ">
                            <div class="space-y-6 bg-white px-4 py-5 sm:p-6">

            @if($currentPage === 1)
                
                                <!-- Choix de la ville -->    
                                <fieldset class="mt-4">
                                                <h2 class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">  
                                                                Choisir votre ville :
                                                    <legend class="sr-only">Choisir votre ville </legend>           
                                                </h2>          
                                                <div class="my-8 space-y-4">
                                                                <div class="flex items-start">
                                                                    <x-jet-input list="list_ville" wire:model.defer='ville' class="py-2 px-1 bg-gray-200 border rounded focus:outline-none focus:shadow-outline appearance-none border border-gray-500 rounded text-gray-700 leading-tight" placeholder="Entrez votre ville"/>

                                                                    @if (strlen($ville) > 2)
                                                                        <datalist id="list_ville">

                                                                        @if (count($villes) > 0)
                                                                            @foreach ($villes as $ville)

                                                                        <option value="{{$ville->ville_id}}">{{$ville->ville_nom}}-{{$ville->ville_departement}}</option>

                                                                    
                                                                            @endforeach
                                                                    @endif
                                                                    </datalist>

                                                                    @endif
                                                                </div>
                                                </div>
                                </fieldset>
                    
                                <hr>

                                <!-- Partie date mais en date --> 
                                <fieldset class="mt-4">
                                                <h2 class=" py-4 block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">  
                                                    Quand êtes-vous disponible?
                                                    <legend class="sr-only">Quand êtes-vous disponible?</legend>           
                                                </h2>
                                
                                                <div>

                                                    <div class="my-8 space-y-4">
                                                        <div class="flex items-start">
                                                        <div class="ml-3 text-sm mr-8">
                                                            <x-jet-label for="start_watch" value="{{ __('Du :') }}"/>
                                                        </div>
                                                        <div class="flex h-5 items-center">
                                                            <x-jet-input id="start_watch" wire:model.lazy="start_watch" name="start_watch" type="date"/>   
                                                        </div>

                                                        <div class="ml-16 text-sm mr-8">
                                                            <x-jet-label for="end_watch" value="{{ __('Au :') }}"/>
                                                        </div>
                                                        <div class="flex h-5 items-center">
                                                            <x-jet-input id="end_watch" wire:model.defer='end_watch' name="end_watch" type="date"/>   
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                </fieldset>
                                <hr>


                                <!-- Partie type de garde -->
                                <fieldset class="mt-4 pt-4">
                                                <h2  class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 pb-2">  
                                                Quel type de garde souhaitez vous?
                                                <legend class="sr-only">Quel type de garde <br> souhaitez vous?</legend>           
                                                </h2>

                                                <div class="my-8 space-y-4">
                                                
                                                    <div class="flex items-start">               
                                                        <div class="flex h-5 items-center">
                                                            <select wire:model.defer='garde' class="py-2 px-6 bg-gray-200 border rounded focus:outline-none focus:shadow-outline appearance-none border border-gray-500 rounded text-gray-700 leading-tight">
                                                            <option value="">--Choisissez un type de garde--</option>
                                                            @foreach($gardes as $garde_type) 
                                                            <option value="{{ $garde_type->id }}">{{ $garde_type->garde }}</option>
                                                            @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                
                                </fieldset>
                        

            @elseif ($currentPage === 2)
                                <!-- Partie type d'animaux -->
                                <fieldset class="mt-4">
                                    <h2 class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">  
                                            Quels animaux pouvez-vous garder?
                                    <legend class="sr-only">Quels animaux <br> pouvez-vous garder?</legend>           
                                    </h2>

                                    <div>
                                        
                                    <div class=" space-y-4">
                                        
                                        <!-- Chats -->
                                        <div class="flex items-start pt-2">
                                        <div class="flex h-5 items-center">
                                            <x-jet-input wire:model.defer="chats" value="{{$chats_id->id}}"  name="chats" type="checkbox" class=" h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <x-jet-label for="watch_cat" value="{{$chats_id->espece}}"/>
                                            <p class="text-gray-500 pt-1">Chat de race, de gouttière...</p>
                                        </div>
                                        </div> 

                                        <!-- Chiens -->
                                        <div class="flex items-start pt-2">
                                        <div class="flex h-5 items-center">
                                            <x-jet-input wire:model.defer="chiens" value="2" id="watch_dog" name="chiens" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <x-jet-label for="watch_dog" value="Chiens"/>
                                            <p class="text-gray-500 pt-1">Labrador, Berger Australien...</p>
                                        </div>
                                        </div> 

                                        <!-- Poissons -->
                                        <div class="flex items-start pt-2">
                                        <div class="flex h-5 items-center">
                                            <x-jet-input wire:model.defer="poissons" value="3" id="watch_fish" name="poissons" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <x-jet-label for="watch_fish" value="Poissons"/>
                                            <p class="pt-1 text-gray-500">En bocal, en bassin...</p>
                                        </div>
                                        </div> 
                                        
                                        <!-- Rongeurs -->
                                        <div class="flex items-start pt-2">
                                        <div class="flex h-5 items-center">
                                            <x-jet-input wire:model.defer="rongeurs" value="4" id="rabbit" name="rongeurs" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <x-jet-label for="rongeurs" value="Rongeurs"/>
                                            <p class="text-gray-500 pt-1">Lapin, cochon d'inde, hamster...</p>
                                        </div>
                                        </div>

                                        <!-- Oiseaux -->
                                        <div class="flex items-start pt-2">
                                        <div class="flex h-5 items-center">
                                            <x-jet-input wire:model.defer="oiseaux" value="5" id="oiseaux" name="oiseaux" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                                        </div>
                                        <div class="ml-3 text-sm">
                                        <x-jet-label for="oiseaux" value="Oiseaux"/>
                                            <p class="text-gray-500 pt-1">Oiseaux en cage ou en volière.</p>
                                        </div>
                                        </div>

                                        <!-- Reptiles -->
                                        <div class="flex items-start pt-2">
                                        <div class="flex h-5 items-center">
                                            <x-jet-input wire:model.defer='reptiles' value="6" id="reptiles" name="reptiles" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                                        </div>
                                        <div class="ml-3 text-sm">
                                        <x-jet-label for="reptiles" value="Reptiles"/>
                                            <p class="text-gray-500 pt-1">Serpent, caméléon, tortue...</p>
                                        </div>
                                        </div>

                                        <!-- Ferme -->
                                        <div class="flex items-start pt-2">
                                        <div class="flex h-5 items-center">
                                            <x-jet-input wire:model.defer="ferme" value="7" id="farm_animal" name="ferme" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                                        </div>
                                        <div class="ml-3 text-sm">
                                        <x-jet-label for="farm_animal" value="Animaux de ferme"/>
                                            <p class="text-gray-500 pt-1">Poule, oie, cheval...</p>
                                        </div>
                                        </div>

                                        <!-- Autre -->
                                        <div class="flex items-start pt-2">
                                        <div class="flex h-5 items-center">
                                            <x-jet-input wire:model.defer="autre" value="{{$autre_id->id}}" id="other_animal" name="autre" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <x-jet-label for="other_animal" value="{{ $autre_id->espece}}"/>
                                            <p class="text-gray-500 pt-1">Vous acceptez de garder n'importe quel type d'animal.</p>
                                        </div>
                                        </div>

                                    
                                        
                                    </div>
                                </fieldset>


            @elseif ($currentPage === 3)
                    
                                <!-- Description -->
                                <fieldset>
                                    <h2 class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">  
                                            Décrivez-vous en quelques mots
                                            <legend class="sr-only">Décrivez-vous <br> en quelques mots</legend>           
                                    </h2>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-start pt-4 pb-4">   
                                                <textarea wire:model.defer="description" class=" resize border rounded focus:outline-none focus:shadow-outline bg-gray-200 appearance-none border border-gray-500 rounded text-gray-700 leading-tight w-full h-20" id="description" placeholder="Démarquez-vous des autres pet-sitters" name="description"></textarea>       
                                            </div>
                                        </div>       
                                </fieldset>    
                                <hr>

                                <!-- Prix -->
                                <fieldset> 
                                        <h2 class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">  
                                            Prix
                                            <legend class="sr-only">Prix</legend>           
                                        </h2>
                                    <div>
                                    <div class="mt-4 space-y-4">
                                        <div class="flex items-start items-center">
                                            <div class="ml-3 text-sm pr-10 ">
                                            <x-jet-label for="price" value="{{ __('Votre tarif en euro par jour.') }}"/>
                                            
                                            </div>
                                            <div class="flex">
                                            <x-jet-input wire:model.defer="prix" name="prix" type="text" class="bg-gray-200 border rounded focus:outline-none focus:shadow-outline appearance-none border border-gray-500 rounded text-gray-700 leading-tight"/>
                                            </div>
                                        
                                        </div>
                                    </div>
                                    </div>
                                </fieldset>
            @endif
                                <hr>

                                <!-- Boutons -->
                                <div class="flex items-center justify-between px-4 py-8 text-right sm:px-6 mx-8"> 
                                    @if($currentPage === 1)
                                        <div></div>
                                    @else
                                        <button wire:click='goToPreviousPages' type="button" id="buttonback">Retour</button>
                                    @endif
                                    @if ($currentPage === count($pages))
                                        <button type="submit" id="buttonsubmit">Valider</button>
                                    @else
                                        <button wire:click="goToNextPages" type="button" id="buttonnext">Suivant</button>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</main>

