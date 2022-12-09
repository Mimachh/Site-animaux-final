<nav x-data="{ open: false }" class="bg-gray-800 border-b border-gray-800 shadow">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- Navbar pour tous -->
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('welcome') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                @auth
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" style="color: #cbd5e0">
                        {{ __('Tableau de bord') }}
                    </x-jet-nav-link>
                </div>
                @endauth
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('annonces.index') }}" :active="request()->routeIs('annonces.index')" style="color: #cbd5e0">
                        {{ __('Voir les annonces') }}
                    </x-jet-nav-link>
                </div>
                
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('annonces.create') }}" :active="request()->routeIs('annonces.create')" style="color: #cbd5e0">
                        {{ __('Ajouter une annonce') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('annonces.create') }}" :active="request()->routeIs('annonces.create')" style="color: #cbd5e0">
                        {{ __('Articles') }}
                    </x-jet-nav-link>
                </div>


            </div>


            <div class="hidden sm:flex sm:items-center sm:ml-6" >

                
                <!-- Navbar lorsque connecté -->
                

                <!-- Notifications -->
                    @auth
                        @if(auth()->user()->unreadNotifications->count() > 0)
                        <div class="hidden top-0 right-0 px-2 py-4 sm:block">
                            <div class="ml-4 relative bg-red-800 px-4 py-2 rounded-full">
                                <x-jet-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        
                                            <button class="flex items-center space-x-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="inline w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                                                </svg>
                                                <span class="text-white" id="js-count">{{auth()->user()->unreadNotifications->count()}}</span>
                                            </button>
                                        
                                    </x-slot>
                                    <x-slot name="content">
                                      
                                        <livewire:notification-proposal>
                                    </x-slot>
                                </x-jet-dropdown>
                            </div>
                        </div>
                        @endif 
                    @endauth
                <!-- Fin notifications -->

                <div class="hidden top-0 right-0 px-6 py-4 sm:block" >
                    @auth 
                    <div class="ml-4 relative ">
                        
                        <x-jet-dropdown align="right" width="48" >
                            
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition" style="color: #cbd5e0">
                                            {{ Auth::user()->name }}

                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400 " style="color: #cbd5e0">
                                    {{ __('Paramètres de mon compte') }}
                                </div>

                                <x-jet-dropdown-link href="{{ route('profile.show') }}" style="color: #cbd5e0">
                                    {{ __('Gérer mon Profil') }}
                                </x-jet-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-jet-dropdown-link>
                                @endif

                            
                                
                                <x-jet-dropdown-link href="{{ route('dashboard') }}" style="color: #cbd5e0">
                                    {{ __('Mon tableau de bord') }}
                                </x-jet-dropdown-link>

                                <x-jet-dropdown-link href="{{ route('proposals.index') }}" style="color: #cbd5e0">
                                    {{ __('Mes gardes') }}
                                </x-jet-dropdown-link>

                                <x-jet-dropdown-link href="{{ route('profile.show') }}" style="color: #cbd5e0">
                                    {{ __('Ma messagerie') }}
                                </x-jet-dropdown-link>

                                <div class="border-t border-gray-600"></div>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                            @click.prevent="$root.submit();" style="color: #cbd5e0">
                                        {{ __('Me déconnecter') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                        
                    </div>
                    @endauth  
               
                    @guest
                    @if (Route::has('register'))
                    <!-- Navbar lorsque non connecté -->
                        <x-jet-nav-link href="{{ route('login') }}" class="text-sm text-white dark:text-white" style="color: #cbd5e0">
                        {{ __('Se connecter') }}
                        </x-jet-nav-link>
                    
                            
                        <x-jet-nav-link href="{{ route('register') }}" :active="request()->routeIs('/register')" class="ml-4 text-sm text-white dark:text-gray-500" style="color: #cbd5e0">
                        {{ __("S'inscrire") }}
                        </x-jet-nav-link>
                    @endif
                
                    @endguest
                </div>
                
            
                
                
            </div>
            <div class="-mr-2 flex items-center sm:hidden" >
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        
        
            @auth 
            <!-- Navbar responsive bouton lorsque connecté -->
            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden ">
        
           
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="flex justify-between px-4">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <div class="shrink-0 mr-3">
                                <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </div>
                        @endif
                        <!-- Notifications -->
                            
                                @if(auth()->user()->unreadNotifications->count() > 0)
                                
                                    <div class="ml-4 bg-red-800 px-4 py-2 rounded-full">
                                        <x-jet-dropdown align="right" width="48">
                                            <x-slot name="trigger">
                                                
                                                    <button class="flex items-center space-x-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="inline w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                                                        </svg>
                                                        <span class="text-white" id="js-count">{{auth()->user()->unreadNotifications->count()}}</span>
                                                    </button>
                                                
                                            </x-slot>
                                            <x-slot name="content">
                                                
                                                <livewire:notification-proposal>
                                            </x-slot>
                                        </x-jet-dropdown>
                                    </div>
                               
                                @endif 
                            
                        <!-- Fin notifications -->         
                    </div>
                    

                    <div class="mt-3 space-y-1">
                        <x-jet-responsive-nav-link href="{{ route('annonces.index') }}" :active="request()->routeIs('annonces.index')">
                                {{ __('Voir les annonces') }}
                        </x-jet-responsive-nav-link>

                        <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('annonces.create')">
                                {{ __('Mon tableau de bord') }}
                        </x-jet-responsive-nav-link>

                        <x-jet-responsive-nav-link href="{{ route('proposals.index') }}" :active="request()->routeIs('annonces.create')">
                                {{ __('Mes gardes') }}
                        </x-jet-responsive-nav-link>


                        <x-jet-responsive-nav-link href="{{ route('annonces.create') }}" :active="request()->routeIs('annonces.create')">
                                {{ __('Articles') }}
                        </x-jet-responsive-nav-link>

                        <!-- Account Management -->
                        <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                            {{ __('Mon profil') }}
                        </x-jet-responsive-nav-link>


                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                        @click.prevent="$root.submit();">
                                {{ __('Se déconnecter') }}
                            </x-jet-responsive-nav-link>
                        </form>             
                    </div>
                </div>
            </div>
            @endauth
        @guest

        <!-- Bouton responsive de la navbar lorsque non connecté -->
            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="flex items-center px-4">
                
                    </div>

                    <div class="mt-3 space-y-1">
                    
                        <x-jet-responsive-nav-link href="{{ route('annonces.index') }}" :active="request()->routeIs('annonces.index')">
                                {{ __('Voir les annonces') }}
                        </x-jet-responsive-nav-link>

                        <x-jet-responsive-nav-link href="{{ route('annonces.create') }}" :active="request()->routeIs('annonces.create')">
                                {{ __('Ajouter une annonce') }}
                        </x-jet-responsive-nav-link>

                        <x-jet-responsive-nav-link href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500">
                            {{ __('Se connecter') }}
                        </x-jet-responsive-nav-link>

                        <x-jet-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('/register')" class=" text-sm text-gray-700 dark:text-gray-500">
                            {{ __("S'inscrire") }}
                        </x-jet-responsive-nav-link>
                    
                    </div>
                </div>
            </div>
        @endguest

    </div>
        
    
</nav>



 
 
