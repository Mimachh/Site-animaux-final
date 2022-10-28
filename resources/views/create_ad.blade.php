<x-app-layout>
@auth
<x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Créer mon annonce de pet-sitter') }}
            <img src="" alt="">
        </h1>
    </x-slot>
@endauth
<main class="bg-indigo-50 pt-5 rounded-3xl ">
@auth

<x-jet-validation-errors class="mb-4 text-center" />

    <h2 class="text-center mb-10 py-5 font-semibold">Créer mon annonce de pet-sitter</h2>

  
<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-6 md:gap-4 ">
   
    <div class="mt-5  md:col-start-2 md:col-span-4 md:mt-0">
     
      <form action="{{ route('create.ad')}}" method="POST">
        @csrf
        <div class="overflow-hidden shadow sm:rounded-md mb-10 ">
          <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
         


          <!-- Partie date mais en date --> 
          <button type="button" id="bouton_cache1" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">  
              Quand êtes-vous disponible?
              <legend class="sr-only">Quand êtes-vous disponible?</legend>           
          </button>
          
          <div>

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
          </div>
            <x-jet-section-border />

          

            <!-- Partie type de garde -->
            <fieldset>
                <button type="button" id="bouton_cache2" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">  
                Quel type de garde souhaitez vous?
                  <legend class="sr-only">Quel type de garde <br> souhaitez vous?</legend>           
                </button>
                <div id="d3" style="display:none;">
                  <div class="mt-4 space-y-4">
                    <div class="flex items-start">
                      <div class="flex h-5 items-center">
                        <x-jet-input id="home" name="home" value="{{$home->id}}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                      </div>
                      <div class="ml-3 text-sm">
                      <x-jet-label for="home" value="{{$home->garde_type}}"/>
                        <p class="text-gray-500">Vous garderez les animaux dans votre domicile.</p>
                      </div>
                    </div>
                    <div class="flex items-start">
                      <div class="flex h-5 items-center">
                        <x-jet-input id="visit" name="visit" value="{{$visit->id}}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                      </div>
                      <div class="ml-3 text-sm">
                      <x-jet-label for="visit" value="{{$visit->garde_type}}"/>
                        <p class="text-gray-500">Vous irez au domicile du propriétaire pour vous occuper de ses animaux.</p>
                      </div>
                    </div>               
                  </div>
                </div>
            </fieldset>
            <x-jet-section-border />


            <!-- Partie type d'animaux -->
            <fieldset>
                <button type="button" id="bouton_cache3" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">  
              Quels animaux pouvez-vous garder?
                  <legend class="sr-only">Quels animaux <br> pouvez-vous garder?</legend>           
                </button>
                <div id="d4" style="display:none;">
                  <div class="mt-4 space-y-4">
                  <div class="flex items-start">
                      <div class="flex h-5 items-center">
                        <x-jet-input value="{{$chats->id}}" id="watch_cat" name="chats" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                      </div>
                      <div class="ml-3 text-sm">
                      <x-jet-label for="watch_cat" value="{{ $chats->espece }}"/>
                      <p class="text-gray-500">Chat de race, de gouttière...</p>
                      </div>
                    </div> 

                    <div class="flex items-start">
                      <div class="flex h-5 items-center">
                        <x-jet-input value="{{$chiens->id}}" id="watch_dog" name="chiens" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                      </div>
                      <div class="ml-3 text-sm">
                      <x-jet-label for="watch_dog" value="{{$chiens->espece}}"/>
                      <p class="text-gray-500">Labrador, Berger Australien...</p>
                      </div>
                    </div> 

                    <div class="flex items-start">
                      <div class="flex h-5 items-center">
                        <x-jet-input value="{{$poissons->id}}" id="watch_fish" name="poissons" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                      </div>
                      <div class="ml-3 text-sm">
                      <x-jet-label for="watch_fish" value="{{$poissons->espece}}"/>
                      <p class="text-gray-500">En bocal, en bassin...</p>
                      </div>
                    </div> 
                    
                    <div class="flex items-start">
                      <div class="flex h-5 items-center">
                        <x-jet-input value="{{$rongeurs->id}}" id="rabbit" name="rongeurs" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                      </div>
                      <div class="ml-3 text-sm">
                        <x-jet-label for="" value="{{$rongeurs->espece}}"/>
                        <p class="text-gray-500">Lapin, cochon d'inde, hamster...</p>
                      </div>
                    </div>

                    <div class="flex items-start">
                      <div class="flex h-5 items-center">
                        <x-jet-input value="{{$oiseaux->id}}" id="bird" name="oiseaux" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                      </div>
                      <div class="ml-3 text-sm">
                      <x-jet-label for="bird" value="{{$oiseaux->espece}}"/>
                        <p class="text-gray-500">Oiseaux en cage ou en volière.</p>
                      </div>
                    </div>

                    <div class="flex items-start">
                      <div class="flex h-5 items-center">
                        <x-jet-input value="{{$reptiles->id}}" id="reptile" name="reptiles" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                      </div>
                      <div class="ml-3 text-sm">
                      <x-jet-label for="reptile" value="{{ $reptiles->espece}}"/>
                        <p class="text-gray-500">Serpent, caméléon, tortue...</p>
                      </div>
                    </div>

                    <div class="flex items-start">
                      <div class="flex h-5 items-center">
                        <x-jet-input value="{{$ferme->id}}" id="farm_animal" name="ferme" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                      </div>
                      <div class="ml-3 text-sm">
                      <x-jet-label for="farm_animal" value="{{$ferme->espece}}"/>
                        <p class="text-gray-500">Poule, oie, cheval...</p>
                      </div>
                    </div>

                    <div class="flex items-start">
                      <div class="flex h-5 items-center">
                        <x-jet-input value="{{$autre->id}}" id="other_animal" name="autre" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                      </div>
                      <div class="ml-3 text-sm">
                        <x-jet-label for="other_animal" value="{{ $autre->espece}}"/>
                        <p class="text-gray-500">Vous garderez les animaux dans votre domicile.</p>
                      </div>
                    </div>
                  </div>
                    
                </div>
            </fieldset>
            
                <x-jet-section-border />
            <fieldset>
                <button type="button" id="bouton_cache4" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">  
                          Décrivez-vous en quelques mots
                          <legend class="sr-only">Décrivez-vous <br> en quelques mots</legend>           
                </button>
                <div id="d5" style="display:none;">
                  <div class="mt-4 space-y-4">
                      <div class="flex items-start pb-10">   
                          <div class="ml-3 text-sm mr-4 ">    
                            <p class="text-gray-500">Donnez envie <br> aux prioriétaires<br> d'animaux <br>de vous confier<br>leur compagnon.</p>
                          </div>
                          <div class="flex ">
                              <textarea class=" resize border rounded focus:outline-none focus:shadow-outline bg-gray-200 appearance-none border border-gray-500 rounded text-gray-700 leading-tight w-full h-20" id="description" placeholder="Démarquez-vous des autres pet-sitters" name="description"></textarea>
                          </div>
                        
                      </div>
                  </div>
                </div>
            </fieldset>    
                    <x-jet-section-border />
              <fieldset> 
                    <button type="button" id="bouton_cache5" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">  
                          Prix
                          <legend class="sr-only">Prix</legend>           
                    </button>
                <div id="d6" style="display:none;">
                  <div class="mt-4 space-y-4">
                    <div class="flex items-start items-center">
                      <div class="ml-3 text-sm pr-10 ">
                          <x-jet-label for="price" value="{{ __('Votre tarif en euro par jour.') }}"/>
                         
                      </div>
                        <div class="flex">
                          <x-jet-input  id="price" name="price" type="text" class="bg-gray-200 border rounded focus:outline-none focus:shadow-outline appearance-none border border-gray-500 rounded text-gray-700 leading-tight"/>
                        </div>
                      
                    </div>
                  </div>
                </div>
              </fieldset>
            
            <x-jet-section-border />
        
          <!--
          @guest
          

        <x-jet-validation-errors class="mb-4" />

      
             <h1 class="text-center mb-10 pb-5 font-semibold">Vous devez être inscrit et connecté pour poster une annonce </h1>   
        

          <div class="flex items-start items-center">
                <div class="ml-3 text-sm pr-10">
                  <x-jet-label for="name" value="{{ __('Votre nom (peut-être modifié plus tard)') }}"/> 
                </div>
                  <div class="flex">
                    <x-jet-input  id="name" name="name" type="text" class="w-full shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  placeholder="Entrez votre nom" :value="old('name')" required autofocus autocomplete="name"/>
                  </div>
          </div>

          <div class="flex items-start items-center">
                <div class="ml-3 text-sm pr-10">
                  <x-jet-label for="email" value="{{ __('Votre adresse mail') }}"/> 
                </div>
                <div class="flex">
                  <x-jet-input placeholder="Adresse mail" id="email" class="block mt-1 w-full shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" />
                </div>
          </div>
           
          <div class="flex items-start items-center">
                <div class="ml-3 text-sm pr-10">
                  <x-jet-label for="password" value="{{ __('Mot de passe') }}"/> 
                </div>
                <div class="flex">
                  <x-jet-input placeholder="Mot de passe" id="password" class="block mt-1 w-full shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" required autocomplete="new-password" />
                </div>
          </div>

            

            <div class="flex items-start items-center">
                <div class="ml-3 text-sm pr-10 ">
                  <x-jet-label class="" for="password_confirmation" value="{{ __('Confirmer votre mot de passe') }}"/> 
                </div>
                <div class="flex">
                  <x-jet-input placeholder="Confirmer mot de passe" id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
          </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            
        
    
              <x-jet-section-border />
          @endguest
                                -->
                  
          </div>
          <div class="bg-white px-4 pb-12 text-center sm:px-6"> 
          <button type="submit" id="button2">Valider</button>
          </div>
          
          
        </div>
      </form>


    </div>
    
  </div>

</div>

@endauth

@guest

<div class="bg-gray-100 min-h-screen flex flex-col  items-center sm:pt-0 bg-gray-100 ">

<h2 class="text-center font-semibold text-gray-800 leading-tight py-10">Pour ajouter une annonce vous devez être connecté </h2>

<img src="images/clin.jpg" alt="chien qui fait un clin d'oeil">
       
  <div class="w-full sm:max-w-md px-6 py-6 bg-white shadow-md overflow-hidden sm:rounded-lg"">
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Votre nom (peut-être modifié plus tard)') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Votre adresse mail') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Mot de passe') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmer votre mot de passe') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Déjà enregistré?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('S\'inscrire') }}
                </x-jet-button>
            </div>
        </form>
  </div>
    
</div>

@endguest




</main>

</x-app-layout>
