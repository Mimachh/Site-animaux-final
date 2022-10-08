<x-app-layout>

<x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Créer mon annonce de pet-sitter') }}
            <img src="" alt="">
        </h1>
    </x-slot>
<main class="bg-indigo-50 mt-5 rounded-3xl ">

<x-jet-validation-errors class="mb-4 text-center" />

    <h2 class="text-center mb-10 py-5 font-semibold">Créer mon annonce de pet-sitter</h2>

  
    <div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-6 md:gap-4 ">
   
    <div class="mt-5  md:col-start-2 md:col-span-4 md:mt-0">
      <form action="{{ route('create.ad')}}" method="POST">
        @csrf
        <div class="overflow-hidden shadow sm:rounded-md  ">
          <div class="space-y-6 bg-white px-4 py-5 sm:p-6"> 
           
          <!-- Partie date mais en texte -->
          
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    Votre nom :
                    </label> 
              <div class="mt-4 space-y-4">
                
                <div class="flex items-start">
                  <div class="flex h-5 items-center">
                    <x-jet-input id="name" name="name" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  placeholder="Entrez votre nom"/>
                  </div>
                </div>               
              </div>
          
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
              Quand êtes-vous disponible?
              </label>
              <div date-rangepicker class="flex items-center">
                <div class="ml-3 text-sm mr-2">
                    <x-jet-label for="start_watch" value="{{ __('Du :') }}"/>
                </div>
                <div class="relative">
                  
                  <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                      <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                  </div>
                  <input name="start_watch"  type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Date de début">
                </div>
                <div class="ml-3 text-sm mr-2">
                    <x-jet-label for="end_watch" value="{{ __('Au :') }}"/>
                </div>
                <div class="relative">
                  <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                      <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                  </div>
                  <input name="end_watch" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Date de fin">
                </div>
              </div> 


          <!-- Partie date mais en date -->

          <legend class="sr-only">Quand êtes-vous disponible?</legend>
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
              Quand êtes-vous disponible?
              </label> 
            <div class="mt-4 space-y-4">
                <div class="flex items-start">
                <div class="ml-3 text-sm mr-2">
                  
                    <x-jet-label for="start_watch" value="{{ __('Du :') }}"/>
                  </div>
                  <div class="flex h-5 items-center">
                    <x-jet-input id="start_watch" name="start_watch" type="date"/>   
                  </div>

                  <div class="ml-3 text-sm mr-2">
                    <x-jet-label for="end_watch" value="{{ __('Au :') }}"/>
                  </div>
                  <div class="flex h-5 items-center">
                    <x-jet-input id="end_watch" name="end_watch" type="date"/>   
                  </div>
                </div>
            </div>
            <x-jet-section-border />

            <!-- Partie type de garde -->
            <fieldset>
              <legend class="sr-only">Quel type de garde <br> souhaitez vous?</legend>
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    Quel type de garde <br> souhaitez vous?
                    </label> 
              <div class="mt-4 space-y-4">
                <div class="flex items-start">
                  <div class="flex h-5 items-center">
                    <x-jet-input id="home" name="garde_type[]" value="home" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                  </div>
                  <div class="ml-3 text-sm">
                  <x-jet-label for="home" value="{{ __('Chez vous') }}"/>
                    <p class="text-gray-500">Vous garderez les animaux dans votre domicile.</p>
                  </div>
                </div>
                <div class="flex items-start">
                  <div class="flex h-5 items-center">
                    <x-jet-input id="visit" name="garde_type[]" value="visit" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                  </div>
                  <div class="ml-3 text-sm">
                  <x-jet-label for="visit" value="{{ __('Visite à domicile') }}"/>
                    <p class="text-gray-500">Vous irez au domicile du propriétaire pour vous occuper de ses animaux.</p>
                  </div>
                </div>               
              </div>
            </fieldset>
            <x-jet-section-border />


            <!-- Partie type d'animaux -->
            <fieldset>
              <legend class="sr-only">Quels animaux <br> pouvez-vous garder?</legend>
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="">
                Quels animaux <br> pouvez-vous garder?
                </label>  
              <div class="mt-4 space-y-4">
                <div class="flex items-start">
                  <div class="flex h-5 items-center">
                    <x-jet-input value="cat" id="watch_cat" name="animaux_gardes[]" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                  </div>
                  <div class="ml-3 text-sm">
                  <x-jet-label for="cat" value="{{ __('Chat') }}"/>
                    
                  </div>
                </div>

                <div class="flex items-start">
                  <div class="flex h-5 items-center">
                    <x-jet-input value="dog" id="watch_dog" name="animaux_gardes[]" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                  </div>
                  <div class="ml-3 text-sm">
                  <x-jet-label for="watch_dog" value="{{ __('Chien') }}"/>
                    
                  </div>
                </div> 
                
                <div class="flex items-start">
                  <div class="flex h-5 items-center">
                    <x-jet-input value="rabbit" id="watch_rabbit" name="animaux_gardes[]" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                  </div>
                  <div class="ml-3 text-sm">
                  <x-jet-label for="rabbit" value="{{ __('Rongeur') }}"/>
                    <p class="text-gray-500">Lapin, cochon d'inde, hamster...</p>
                  </div>
                </div>

                <div class="flex items-start">
                  <div class="flex h-5 items-center">
                    <x-jet-input value="bird" id="watch_bird" name="animaux_gardes[]" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                  </div>
                  <div class="ml-3 text-sm">
                  <x-jet-label for="bird" value="{{ __('Oiseau') }}"/>
                    <p class="text-gray-500">Oiseaux en cage ou en volière.</p>
                  </div>
                </div>

                <div class="flex items-start">
                  <div class="flex h-5 items-center">
                    <x-jet-input value="reptile" id="watch_reptile" name="animaux_gardes[]" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                  </div>
                  <div class="ml-3 text-sm">
                  <x-jet-label for="reptile" value="{{ __('Reptile') }}"/>
                    <p class="text-gray-500">Serpent, caméléon, tortue...</p>
                  </div>
                </div>

                <div class="flex items-start">
                  <div class="flex h-5 items-center">
                    <x-jet-input value="farm_animal" id="watch_farm_animal" name="animaux_gardes[]" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                  </div>
                  <div class="ml-3 text-sm">
                  <x-jet-label for="farm_animal" value="{{ __('Animaux de ferme') }}"/>
                    <p class="text-gray-500">Poule, oie, cheval...</p>
                  </div>
                </div>

                <div class="flex items-start">
                  <div class="flex h-5 items-center">
                    <x-jet-input value="other_animal" id="watch_other_animal" name="animaux_gardes[]" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                  </div>
                  <div class="ml-3 text-sm">
                  <x-jet-label for="other_animal" value="{{ __('Tous les autres animaux') }}"/>
                    <p class="text-gray-500">Vous garderez les animaux dans votre domicile.</p>
                  </div>
                </div>
                <x-jet-section-border />
                <div class="flex items-start pb-10">
                    <div class="ml-3 text-sm mr-4 ">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 pr-2" for="description">Décrivez-vous <br> en quelques mots</label>
                    <p class="text-gray-500">Donnez envie <br> aux prioriétaires<br> d'animaux <br>de vous confier<br>leur compagnon.</p>
                    </div>
                    <div class="flex ">
                        <textarea class=" resize border rounded focus:outline-none focus:shadow-outline bg-gray-200 appearance-none border border-gray-500 rounded text-gray-700 leading-tight w-full h-20" id="description" placeholder="Démarquez-vous des autres pet-sitters" name="description"></textarea>
                    </div>
                  
                    </div>
                </div>
                <x-jet-section-border />
                <div class="flex items-start">
                <div class="ml-3 text-sm pr-10">
                  <x-jet-label for="price" value="{{ __('Prix') }}"/>
                    <p class="text-gray-500">Votre tarif en euro par jour.</p>
                  </div>
                  <div class="flex">
                    <x-jet-input  id="price" name="price" type="text" class="bg-gray-200 border rounded focus:outline-none focus:shadow-outline appearance-none border border-gray-500 rounded text-gray-700 leading-tight"/>
                  </div>
                  
                </div>

            </fieldset>
            <x-jet-section-border />
          </div>
          <div class="bg-gray-50 px-4 py-3 text-center sm:px-6">
            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Valider</button>
          </div>
        </div>
      </form>


    </div>
    
  </div>

</div>

</main>

</x-app-layout>
