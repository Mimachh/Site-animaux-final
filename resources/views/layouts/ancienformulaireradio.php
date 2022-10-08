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
    

 