<x-app-layout>
<x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer mon annonce de pet-sitter') }}
        </h1>
    </x-slot>
<main class="bg-indigo-50 mr-64 ml-64 mt-5 rounded-3xl">


    <h2 class="text-center mb-10 py-5 font-semibold">Créer mon annonce de pet-sitter</h2>

    <form class="w-full max-w-sm m-auto">
    
    <!-- Section Type de garde -->

        <div class="md:flex mid:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Quel type de garde <br> souhaitez vous?
                    </label> 
                </div>

            <div class="md:w-2/3">
                <div class="block">
                    <x-jet-label for="visit" value="{{ __('Chez vous?') }}"/>
                        <div class="inline-flex mr-2 mt-3 mb-5">    
                                    <x-jet-input type="radio" id="visit" name="visit" value="true" class="mr-2"
                                        checked/>
                                    <x-jet-label for="visit" value="{{ __('Oui') }}" />
                        </div>
                        <div class="inline-flex"> 
                                <x-jet-input type="radio" id="visit" name="visit" value="false" class="mr-2"/>
                                <x-jet-label for="visit" value="{{ __('Non') }}"/>
                                <x-jet-input-error for="visit" class="mt-2" />
                        </div>
                </div>
                <div>
                    <x-jet-label for="" value="{{ __('Visite à domicile ?') }}"/>
                        <div class="inline-flex mr-2 mt-3">    
                            <x-jet-input type="radio" id="home" name="home" value="true" class="mr-2"
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
                <div class="md:w-1/3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                Quels animaux pouvez-vous<br> garder?
                </label> 
                </div>

            <div class="md:w-2/3">
                <div class="block">
                        <x-jet-label for="" value="{{ __('Chat?') }}"/>
                        <div class="inline-flex mr-2 mt-3 mb-5">    
                            <x-jet-input type="radio" id="watch_cat" name="watch_cat" value="true" class="mr-2"
                                checked/>
                            <x-jet-label for="1" value="{{ __('Oui') }}" />
                        </div>
                        <div class="inline-flex"> 
                            <x-jet-input type="radio" id="watch_cat" name="watch_cat" value="false" class="mr-2"/>
                            <x-jet-label for="watch_cat" value="{{ __('Non') }}"/>
                            <x-jet-input-error for="watch_cat" class="mt-2" />
                        </div>
                </div>    
                    <div>
                        <x-jet-label for="" value="{{ __('Chien?') }}"/>
                        <div class="inline-flex mr-2 mt-3">    
                            <x-jet-input type="radio" id="watch_dog" name="watch_dog" value="true" class="mr-2"
                                checked/>
                            <x-jet-label for="watch_dog" value="{{ __('Oui') }}" />
                        </div>
                        <div class="inline-flex"> 
                            <x-jet-input type="radio" id="watch_dog" name="watch_dog" value="false" class="mr-2"/>
                            <x-jet-label for="watch_dog" value="{{ __('Non') }}"/>
                            <x-jet-input-error for="watch_dog" class="mt-2" />
                        </div>

                    </div>
                    
                <div>
                    <x-jet-label for="watch_rabbit" value="{{ __('Lapin?') }}"/>
                    <div class="inline-flex mr-2 mt-3">    
                        <x-jet-input type="radio" id="watch_rabbit" name="watch_rabbit" value="true" class="mr-2"
                            checked/>
                        <x-jet-label for="watch_rabbit" value="{{ __('Oui') }}" />
                    </div>
                    <div class="inline-flex"> 
                        <x-jet-input type="radio" id="watch_rabbit" name="watch_rabbit" value="false" class="mr-2"/>
                        <x-jet-label for="watch_rabbit" value="{{ __('Non') }}"/>
                        <x-jet-input-error for="watch_rabbit" class="mt-2" />
                    </div>
                </div>

                <div>
                    <x-jet-label for="" value="{{ __('Oiseaux?') }}"/>
                    <div class="inline-flex mr-2 mt-3">    
                        <x-jet-input type="radio" id="watch_bird" name="watch_bird" value="true" class="mr-2"
                            checked/>
                        <x-jet-label for="watch_bird" value="{{ __('Oui') }}" />
                    </div>
                    <div class="inline-flex"> 
                        <x-jet-input type="radio" id="watch_bird" name="watch_bird" value="false" class="mr-2"/>
                        <x-jet-label for="watch_bird" value="{{ __('Non') }}"/>
                        <x-jet-input-error for="watch_bird" class="mt-2" />
                    </div>  
                </div>

                <div>
                    <x-jet-label for="" value="{{ __('Reptile?') }}"/>
                    <div class="inline-flex mr-2 mt-3">    
                        <x-jet-input type="radio" id="watch_reptile" name="watch_reptile" value="true" class="mr-2"
                            checked/>
                        <x-jet-label for="watch_reptile" value="{{ __('Oui') }}" />
                    </div>
                    <div class="inline-flex"> 
                        <x-jet-input type="radio" id="watch_reptile" name="watch_reptile" value="false" class="mr-2"/>
                        <x-jet-label for="watch_reptile" value="{{ __('Non') }}"/>
                        <x-jet-input-error for="watch_reptile" class="mt-2" />
                    </div>
                </div>

                <div>
                    <x-jet-label for="" value="{{ __('Animaux de ferme?') }}"/>
                    <div class="inline-flex mr-2 mt-3">    
                        <x-jet-input type="radio" id="watch_farm_animal" name="watch_farm_animal" value="true" class="mr-2"
                            checked/>
                        <x-jet-label for="watch_farm_animal" value="{{ __('Oui') }}" />
                    </div>
                    <div class="inline-flex"> 
                        <x-jet-input type="radio" id="watch_farm_animal" name="watch_farm_animal" value="false" class="mr-2"/>
                        <x-jet-label for="watch_farm_animal" value="{{ __('Non') }}"/>
                        <x-jet-input-error for="watch_farm_animal" class="mt-2" />
                    </div>
                </div>

                <div>
                    <x-jet-label for="" value="{{ __('Autres animaux?') }}"/>
                    <div class="inline-flex mr-2 mt-3">    
                        <x-jet-input type="radio" id="watch_other_animal" name="watch_other_animal" value="true" class="mr-2"
                            checked/>
                        <x-jet-label for="watch_other_animal" value="{{ __('Oui') }}" />
                    </div>
                    <div class="inline-flex"> 
                        <x-jet-input type="radio" id="watch_other_animal" name="watch_other_animal" value="false" class="mr-2"/>
                        <x-jet-label for="watch_other_animal" value="{{ __('Non') }}"/>
                        <x-jet-input-error for="watch_other_animal" class="mt-2" />    
                    </div>
                    <div>
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 py-2 mt-2" for="watch_other_animal">
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
                <x-jet-label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="description" value="{{ __('Description') }}"/>
                </div>
                <div class="md:w-2/3">
                <textarea class=" resize border rounded focus:outline-none focus:shadow-outline bg-gray-200 appearance-none border border-gray-500 rounded w-full h-40 text-gray-700 leading-tight" id="description" placeholder="Courte description me concernant"></textarea>
                </div>
            </div>

        <x-jet-section-border />

            <div class="md:flex md:items-center py-4 mb-4">
                <div class="md:w-1/3">
                    <x-jet-label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="price" value="{{ __('Prix/Jour (en euros)') }}"/>
                </div>
                <div class="md:w-2/3">
                <x-jet-input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded mb-3 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="price" type="number" min="1" max="50" placeholder="7"/>
                </div>   
            </div>
        

    </form>



</main>
</x-app-layout>
