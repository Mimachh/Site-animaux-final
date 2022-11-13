@auth
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Modifier la fiche de mon animal') }}
        </h1>
    </x-slot>
@endauth

<main class="bg-indigo-100 pt-5 rounded-3xl ">
    @auth

        <x-jet-validation-errors class="mb-4 text-center" />
        <div class="py-5">
            <h2 class="text-center font-bold">Modifier la fiche de mon animal</h2>
            <p class="text-center mb-10 py-5">Ses informations permettront au Pet-Sitter d'en savoir plus sur votre animal. <br>
           Les Pet-Sitter acceptent plus facilement les gardes lorsqu'ils ont une description de votre compagnon. </p>
        </div>
        <!-- Début du formulaire  -->
        

            

    <div class="mt-10 sm:mt-2">
        <div class="md:grid md:grid-cols-6 md:gap-4 ">
            <div class="mt-5  md:col-start-2 md:col-span-4 md:mt-0">
                <form wire:submit.prevent="submit">
                    <div class="overflow-hidden shadow sm:rounded-md mb-10 ">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
<input type="hidden" name="id" wire:model="ids"/>
                        @if($currentPage === 1)
                            <x-jet-label for="name" value="{{ __('Nom de mon animal') }}" />
                            <input name="name" type="text" class=" mt-1 block w-64 rounded" wire:model="nom"/>
                            <x-jet-input-error for="name" class="mt-2" />

                            <!-- Barre de selection espèces et races -->
                            <div class=" py-5">
                                <x-jet-label for="type" value="{{ __('Espèce de mon animal') }}" class="pb-3"/>
                                <!--<p wire:loading></p>-->
                                <div>
                                    <select class="block px-3 py-1.5 text-base font-normal text-gray-700 
                                                bg-whiteborder border-solid border-gray-300 rounded transition ease-in-out m-0
                                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                            id="espece_id" wire:model="espece">
                                            <option value="">Choisir une espece</option>
                                        @foreach($especes as $espece) 
                                            <option value="{{$espece->id}}">{{$espece->espece}}</option>    
                                        @endforeach
                                    </select>
                                </div>
                                @if($races->count() > 0)                                   
                                <div>    
                                        <select id="race_id" wire:model="race" 
                                                class="my-3 block px-3 py-1.5 text-base font-normal text-gray-700 
                                                    bg-white border border-solid border-gray-300 rounded transition ease-in-out m-0
                                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                                            @foreach($races as $race)   
                                            <option value="{{$race->id}}">{{$race->race_animal}}</option>
                                            @endforeach
                                        </select>  
                                </div>                              
                                @endif
                            </div>
                            <!-- Fin barre de selection espèces et races -->

                            <x-jet-label for="personnality" value="{{ __('Sa personnalité') }}" />
                            <textarea name="personnality" type="text"  class="rounded mt-1 block w-full" wire:model="personnalité" placeholder="Décrivez en quelques mots votre animal pour informer le pet-sitter"></textarea>
                            <x-jet-input-error for="personnality" class="mt-2"/>
                       
                        @elseif($currentPage === 2)
                        
                            
                            <h4 class="text-center font-semibold text-gray-600 text-sm underline">Votre animal s'entend bien avec : </h4>
                        <div class="">
                            <!-- CHIENS -->
                            <div class="flex items-start py-2 justify-around">
                                
                                            <div class="flex ml-2">
                                                <div class="flex h-5 items-center">
                                                    <x-jet-input wire:model="chiens" value="1" id="chiens mâles" name="chiens mâles" type="checkbox" class=" h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                                                </div>
                                                <div class="ml-2 text-sm">
                                                    <x-jet-label for="chiens mâles" value="{{ __('Chiens mâles') }}"/>
                                                </div>
                                            </div>
                                            <div class="flex ml-2">
                                                <div class="flex h-5 items-center">
                                                    <x-jet-input wire:model="chiennes" value="1" id="chiens femelles" name="chiens femelles" type="checkbox" class=" h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                                                </div>
                                                <div class="ml-2 text-sm">
                                                    <x-jet-label for="chiens femelles" value="{{ __('Chiens femelles') }}"/>
                                                </div>
                                            </div>
                            </div>
                            <!-- CHATS -->
                            <div class="flex items-start py-2 justify-around">
                                            <div class="flex">
                                                <div class="flex h-5 items-center">
                                                    <x-jet-input wire:model="chats" value="1" id="chats mâles" name="chats mâles" type="checkbox" class=" h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                                                </div>
                                                <div class="ml-2 text-sm">
                                                    <x-jet-label for="chats mâles" value="{{ __('Chats mâles') }}"/>
                                                </div>
                                            </div>
                                            <div class="flex">
                                                <div class="flex h-5 items-center">
                                                    <x-jet-input wire:model="chattes" value="1" id="chats femelles" name="chats femelles" type="checkbox" class=" h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                                                </div>
                                                <div class="ml-2 text-sm">
                                                    <x-jet-label for="chats femelles" value="{{ __('Chats femelles') }}"/>
                                                </div>
                                            </div>
                            </div>
                            <!-- RONGEURS -->
                            <div class="flex items-start py-2 justify-around">
                                            <div class="flex ml-6">
                                                <div class="flex h-5 items-center">
                                                    <x-jet-input wire:model="rongeurs" value="1" id="rongeurs mâles" name="rongeurs mâles" type="checkbox" class=" h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                                                </div>
                                                <div class="ml-2 text-sm">
                                                    <x-jet-label for="rongeurs mâles" value="{{ __('Rongeurs mâles') }}"/>
                                                </div>
                                            </div>
                                            <div class="flex ml-6">
                                                <div class="flex h-5 items-center">
                                                    <x-jet-input wire:model="rongeuses" value="1" id="rongeurs femelles" name="rongeurs femelles" type="checkbox" class=" h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                                                </div>
                                                <div class="ml-2 text-sm">
                                                    <x-jet-label for="rongeurs femelles" value="{{ __('Rongeurs femelles') }}"/>
                                                </div>
                                            </div>
                            </div>
                            <!-- OISEAUX -->
                            <div class="flex items-start py-2 justify-center">

                                                <div class="flex h-5 items-center">
                                                    <x-jet-input wire:model="birds" value="1" id="oiseaux" name="oiseaux" type="checkbox" class=" h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                                                </div>
                                                <div class="ml-2 text-sm mr-5">
                                                    <x-jet-label for="oiseaux" value="{{ __('Oiseaux') }}"/>
                                                </div>
            
                            </div>
                            <!-- REPTILES -->
                            <div class="flex items-start py-2 justify-center">

                                                <div class="flex h-5 items-center">
                                                    <x-jet-input wire:model="reptiles" value="1" id="reptiles" name="reptiles" type="checkbox" class=" h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                                                </div>
                                                <div class="ml-2 text-sm mr-5">
                                                    <x-jet-label for="reptiles" value="{{ __('Reptiles') }}"/>
                                                </div>
            
                            </div>
                        </div>
                        @endif
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
