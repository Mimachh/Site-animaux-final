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

  <form class="w-full  max-w-sm m-auto" action="{{ route('create.ad')}}" method="POST">
    @csrf
    
    <!-- Section Type de garde -->

        <div class="md:flex mid:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    Quel type de garde <br> souhaitez vous?
                    </label> 
                </div>

            <div class="md:w-2/3 text-center">
                <div class="block">
                    <x-jet-label for="visit" value="{{ __('Chez vous?') }}"/>
                        <div class="inline-flex mr-2 mt-3 mb-5">    
                                    <x-jet-input type="radio" id="visit" name="visit" value="1" class="mr-2"
                                        checked/>
                                    <x-jet-label for="visit" value="{{ __('Oui') }}" />
                        </div>
                        <div class="inline-flex"> 
                                <x-jet-input type="radio" id="visit" name="visit" value="0" class="mr-2"/>
                                <x-jet-label for="visit" value="{{ __('Non') }}"/>
                                <x-jet-input-error for="visit" class="mt-2" />
                        </div>
                </div>
                <x-jet-section-border />
                <div>
                    <x-jet-label for="" value="{{ __('Visite à domicile ?') }}"/>
                        <div class="inline-flex mr-2 mt-3 mb-5">    
                            <x-jet-input type="radio" id="home" name="home" value="1" class="mr-2"
                                checked/>
                            <x-jet-label for="1" value="{{ __('Oui') }}" />
                        </div>
                        <div class="inline-flex"> 
                            <x-jet-input type="radio" id="home" name="home" value="0" class="mr-2"/>
                            <x-jet-label for="0" value="{{ __('Non') }}"/>
                            <x-jet-input-error for="home" class="mt-2" />
                        </div>

                </div>

            </div>
        </div>
        <x-jet-section-border />
    <!-- Section animaux à garder -->

        <div class="md:flex mid:items-center">
                <div class="md:w-1/3 sm:w-3/3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="">
                Quels animaux <br> pouvez-vous garder?
                </label> 
                </div>

            <div class="md:w-2/3 sm:w-3/3 text-center">
                <div class="block ">
                        <x-jet-label for="" value="{{ __('Chat?') }}"/>
                        <div class="inline-flex mr-2 mt-3 mb-5">    
                            <x-jet-input type="radio" id="watch_cat" name="watch_cat" value="1" class="mr-2"
                                checked/>
                            <x-jet-label for="1" value="{{ __('Oui') }}" />
                        </div>
                        <div class="inline-flex"> 
                            <x-jet-input type="radio" id="watch_cat" name="watch_cat" value="0" class="mr-2"/>
                            <x-jet-label for="watch_cat" value="{{ __('Non') }}"/>
                            <x-jet-input-error for="watch_cat" class="mt-2" />
                        </div>
                </div> 
                <x-jet-section-border />   
                    <div>
                        <x-jet-label for="watch_dog" value="{{ __('Chien?') }}"/>
                        <div class="inline-flex mr-2 mt-3 mb-5">    
                            <x-jet-input type="radio" id="watch_dog" name="watch_dog" value="1" class="mr-2"
                                checked/>
                            <x-jet-label for="watch_dog" value="{{ __('Oui') }}" />
                        </div>
                        <div class="inline-flex"> 
                            <x-jet-input type="radio" id="watch_dog" name="watch_dog" value="0" class="mr-2"/>
                            <x-jet-label for="watch_dog" value="{{ __('Non') }}"/>
                            <x-jet-input-error for="watch_dog" class="mt-2" />
                        </div>

                    </div>
                    <x-jet-section-border />
                <div>
                    <x-jet-label for="watch_rabbit" value="{{ __('Lapin?') }}"/>
                    <div class="inline-flex mr-2 mt-3 mb-5">    
                        <x-jet-input type="radio" id="watch_rabbit" name="watch_rabbit" value="1" class="mr-2"
                            checked/>
                        <x-jet-label for="watch_rabbit" value="{{ __('Oui') }}" />
                    </div>
                    <div class="inline-flex"> 
                        <x-jet-input type="radio" id="watch_rabbit" name="watch_rabbit" value="0" class="mr-2"/>
                        <x-jet-label for="watch_rabbit" value="{{ __('Non') }}"/>
                        <x-jet-input-error for="watch_rabbit" class="mt-2" />
                    </div>
                </div>
                <x-jet-section-border />
                <div>
                    <x-jet-label for="" value="{{ __('Oiseaux?') }}"/>
                    <div class="inline-flex mr-2 mt-3 mb-5">    
                        <x-jet-input type="radio" id="watch_bird" name="watch_bird" value="1" class="mr-2"
                            checked/>
                        <x-jet-label for="watch_bird" value="{{ __('Oui') }}" />
                    </div>
                    <div class="inline-flex"> 
                        <x-jet-input type="radio" id="watch_bird" name="watch_bird" value="0" class="mr-2"/>
                        <x-jet-label for="watch_bird" value="{{ __('Non') }}"/>
                        <x-jet-input-error for="watch_bird" class="mt-2" />
                    </div>  
                </div>
                <x-jet-section-border />
                <div>
                    <x-jet-label for="" value="{{ __('Reptile?') }}"/>
                    <div class="inline-flex mr-2 mt-3 mb-5">    
                        <x-jet-input type="radio" id="watch_reptile" name="watch_reptile" value="1" class="mr-2"
                            checked/>
                        <x-jet-label for="watch_reptile" value="{{ __('Oui') }}" />
                    </div>
                    <div class="inline-flex"> 
                        <x-jet-input type="radio" id="watch_reptile" name="watch_reptile" value="0" class="mr-2"/>
                        <x-jet-label for="watch_reptile" value="{{ __('Non') }}"/>
                        <x-jet-input-error for="watch_reptile" class="mt-2" />
                    </div>
                </div>
                <x-jet-section-border />
                <div>
                    <x-jet-label for="" value="{{ __('Animaux de ferme?') }}"/>
                    <div class="inline-flex mr-2 mt-3 mb-5">    
                        <x-jet-input type="radio" id="watch_farm_animal" name="watch_farm_animal" value="1" class="mr-2"
                            checked/>
                        <x-jet-label for="watch_farm_animal" value="{{ __('Oui') }}" />
                    </div>
                    <div class="inline-flex"> 
                        <x-jet-input type="radio" id="watch_farm_animal" name="watch_farm_animal" value="0" class="mr-2"/>
                        <x-jet-label for="watch_farm_animal" value="{{ __('Non') }}"/>
                        <x-jet-input-error for="watch_farm_animal" class="mt-2" />
                    </div>
                </div>
                <x-jet-section-border />
                <div>
                    <x-jet-label for="watch_other_animal" value="{{ __('Autres animaux?') }}"/>
                    <div class="inline-flex mr-2 mt-3 mb-5">    
                        <x-jet-input type="radio" id="watch_other_animal" name="watch_other_animal" value="1" class="mr-2"
                            checked/>
                        <x-jet-label for="watch_other_animal" value="{{ __('Oui') }}" />
                    </div>
                    <div class="inline-flex"> 
                        <x-jet-input type="radio" id="watch_other_animal" name="watch_other_animal" value="0" class="mr-2"/>
                        <x-jet-label for="watch_other_animal" value="{{ __('Non') }}"/>
                        <x-jet-input-error for="watch_other_animal" class="mt-2" />    
                    </div>
                    <div>
                        <label class="text-xs block uppercase tracking-wide text-gray-700  font-bold mb-2 py-2 mt-2" for="watch_other_animal">
                            Si oui, lequel?
                        </label> 
                        <x-jet-input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="watch_other_animal" type="text" placeholder="Ours polaire"/>
                    
                    </div>
                </div>

            </div>

            
        </div>
        <x-jet-section-border />
            <div class="md:flex md:items-center py-4 mb-4">
                <div class="md:w-1/3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 pr-2" for="description">Décrivez-vous en quelques mots</label>
                </div>
                <div class="md:w-2/3">
                <textarea class=" resize border rounded focus:outline-none focus:shadow-outline bg-gray-200 appearance-none border border-gray-500 rounded w-full h-40 text-gray-700 leading-tight" id="description" placeholder="Démarquez-vous des autres pet-sitters" name="description"></textarea>
                <x-jet-input-error for="description" class="mt-2" />
                </div>
            </div>

        <x-jet-section-border />

            <div class="md:flex md:items-center py-4 ">
                <div class="md:w-1/3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="price"> Prix/Jour (en euros)</label>
                </div>
                <div class="md:w-2/3">
                <x-jet-input class=" appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded mb-3 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="price" type="text" min="1" max="50" placeholder="7" name="price"/>
                <x-jet-input-error for="price" class="mt-2" />
                </div>   
            </div>

        <x-jet-section-border />
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

            <div class="text-center pb-10">
            <x-jet-button >
                    {{ __('Valider') }}
                </x-jet-button>
            </div>

    </form>
    

<!-- a annuler pour l'instant 
    <div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-6 md:gap-4 ">
   
    <div class="mt-5  md:col-start-2 md:col-span-4 md:mt-0">
      <form action="{{ route('create.ad')}}" method="POST">
        @csrf
        <div class="overflow-hidden shadow sm:rounded-md  ">
          <div class="space-y-6 bg-white px-4 py-5 sm:p-6"> -->
           
          <!-- Partie date mais en texte -->

          <!-- 
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
              </div> -->


          <!-- Partie date mais en date -->
<!--
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
-->

            <!-- Partie type de garde -->
           <!-- <fieldset>
              <legend class="sr-only">Quel type de garde <br> souhaitez vous?</legend>
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    Quel type de garde <br> souhaitez vous?
                    </label> 
              <div class="mt-4 space-y-4">
                <div class="flex items-start">
                  <div class="flex h-5 items-center">
                    <x-jet-input id="home" name="home" value="home" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                  </div>
                  <div class="ml-3 text-sm">
                  <x-jet-label for="home" value="{{ __('Chez vous') }}"/>
                    <p class="text-gray-500">Vous garderez les animaux dans votre domicile.</p>
                  </div>
                </div>
                <div class="flex items-start">
                  <div class="flex h-5 items-center">
                    <x-jet-input id="visit" name="visit" value="visit" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                  </div>
                  <div class="ml-3 text-sm">
                  <x-jet-label for="visit" value="{{ __('Visite à domicile') }}"/>
                    <p class="text-gray-500">Vous irez au domicile du propriétaire pour vous occuper de ses animaux.</p>
                  </div>
                </div>               
              </div>
            </fieldset>
            <x-jet-section-border />
-->

            <!-- Partie type d'animaux -->
        <!--    <fieldset>
              <legend class="sr-only">Quels animaux <br> pouvez-vous garder?</legend>
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="">
                Quels animaux <br> pouvez-vous garder?
                </label>  
              <div class="mt-4 space-y-4">
                <div class="flex items-start">
                  <div class="flex h-5 items-center">
                    <x-jet-input value="cat" id="watch_cat" name="watch_cat" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                  </div>
                  <div class="ml-3 text-sm">
                  <x-jet-label for="cat" value="{{ __('Chat') }}"/>
                    
                  </div>
                </div>

                <div class="flex items-start">
                  <div class="flex h-5 items-center">
                    <x-jet-input value="dog" id="watch_dog" name="watch_dog" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                  </div>
                  <div class="ml-3 text-sm">
                  <x-jet-label for="watch_dog" value="{{ __('Chien') }}"/>
                    
                  </div>
                </div> 
                
                <div class="flex items-start">
                  <div class="flex h-5 items-center">
                    <x-jet-input value="rabbit" id="watch_rabbit" name="watch_rabbit" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                  </div>
                  <div class="ml-3 text-sm">
                  <x-jet-label for="rabbit" value="{{ __('Rongeur') }}"/>
                    <p class="text-gray-500">Lapin, cochon d'inde, hamster...</p>
                  </div>
                </div>

                <div class="flex items-start">
                  <div class="flex h-5 items-center">
                    <x-jet-input value="bird" id="watch_bird" name="watch_bird" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                  </div>
                  <div class="ml-3 text-sm">
                  <x-jet-label for="bird" value="{{ __('Oiseau') }}"/>
                    <p class="text-gray-500">Oiseaux en cage ou en volière.</p>
                  </div>
                </div>

                <div class="flex items-start">
                  <div class="flex h-5 items-center">
                    <x-jet-input value="reptile" id="watch_reptile" name="watch_reptile" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                  </div>
                  <div class="ml-3 text-sm">
                  <x-jet-label for="reptile" value="{{ __('Reptile') }}"/>
                    <p class="text-gray-500">Serpent, caméléon, tortue...</p>
                  </div>
                </div>

                <div class="flex items-start">
                  <div class="flex h-5 items-center">
                    <x-jet-input value="farm_animal" id="watch_farm_animal" name="watch_farm_animal" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                  </div>
                  <div class="ml-3 text-sm">
                  <x-jet-label for="farm_animal" value="{{ __('Animaux de ferme') }}"/>
                    <p class="text-gray-500">Poule, oie, cheval...</p>
                  </div>
                </div>

                <div class="flex items-start">
                  <div class="flex h-5 items-center">
                    <x-jet-input value="other_animal" id="watch_other_animal" name="watch_other_animal" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
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
                    <p class="text-gray-500">Votre tarif en europar jour.</p>
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
-->

    </div>
    
  </div>

</div>

</main>

</x-app-layout>
