@auth
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Créer mon annonce de pet-sitter') }}
        </h1>
    </x-slot>
@endauth

<main class="bg-indigo-50 pt-5 rounded-3xl ">
@auth

<x-jet-validation-errors class="mb-4 text-center" />

    <h2 class="text-center mb-10 py-5 font-semibold">Créer mon annonce de pet-sitter</h2>


    <!-- Début du formulaire  -->

            

<div class="mt-10 sm:mt-2">
    <div class="md:grid md:grid-cols-6 md:gap-4 ">
   
        <div class="mt-5  md:col-start-2 md:col-span-4 md:mt-0">
            <form wire:submit.prevent="submit">
                <div class="overflow-hidden shadow sm:rounded-md mb-10 ">
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">


            
                        <!-- Choix de la ville -->    

                        <button type="button" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">  
                                        Choisir votre ville :
                            <legend class="sr-only">Choisir votre ville </legend>           
                        </button>          
                        <div class="mt-4 space-y-4">
                                        <div class="flex items-start">
                                            <x-jet-input list="list_ville" wire:model='ville' class="py-2 bg-gray-200 border rounded focus:outline-none focus:shadow-outline appearance-none border border-gray-500 rounded text-gray-700 leading-tight"/>

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
                    
                        <!-- Partie type de garde -->
                        <fieldset>
                            <button type="button" id="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">  
                            Quel type de garde souhaitez vous?
                            <legend class="sr-only">Quel type de garde <br> souhaitez vous?</legend>           
                            </button>
                        
                            
                            <div class="mt-4 space-y-4">
                                <div class="flex items-start" >
                                    <div class="flex h-5 items-center">     
                                        <x-jet-input wire:model='home'  value="1" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                                    </div>
                                    <div class="ml-3 text-sm">
                                    <x-jet-label for="home" value=""/>
                                        <p class="text-gray-500">Vous garderez les animaux dans votre domicile.</p>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="mt-4 space-y-4">
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <x-jet-input wire:model='visit' value="{2}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                                    </div>
                                    
                                    <div class="ml-3 text-sm">
                                    <x-jet-label for="visit" value=""/>
                                        <p class="text-gray-500">Vous irez au domicile du propriétaire pour vous occuper de ses animaux.</p>
                                    </div>
                                </div>
                            </div>
                            
                        </fieldset>
                        <div class="mt-4 space-y-4">
                            <div class="ml-3 text-sm">
                                <x-jet-label for="garde" value="{{ __('Type de Garde') }}"/>
                            </div>

                            <div class="flex items-start">               
                                <div class="flex h-5 items-center">
                                    <select  name='garde' id="garde" wire:model.lazy='type_id'>
                                    <option value="">--Choisissez un type de garde--</option>
                                    @foreach($garde_type as $type_id) 
                                    <option value="{{$type_id->id}}" wire:key="{{$type_id->id}}">{{$type_id->garde_type}}</option>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                        <x-jet-section-border />


                        <div class="bg-white px-4 pb-12 text-center sm:px-6"> 
                            <button type="submit" id="button2">Valider</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<x-jet-section-border />

@endauth

    <!-- Pour les non-connecté -->
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

