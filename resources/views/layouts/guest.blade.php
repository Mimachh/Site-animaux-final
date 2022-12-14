<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/css_perso.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />

        <!-- Tailwind -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Tailwind mais je ne sais plus pourquoi je crois qu'il ne sert plus a rien -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />

        <!-- Sweet Alert 2 -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Pour les flash messages -->
        <style>
            [x-cloak] { display: none;}
        </style>

        @livewireStyles
    </head>
    <body>

    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100 shadow">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="" :active="request()->routeIs('dashboard')">
                        {{ __('Tableau de bord') }}
                    </x-jet-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="" :active="request()->routeIs('')">
                        {{ __('Voir les annonces') }}
                    </x-jet-nav-link>
                </div>
                
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('ad.create') }}" :active="request()->routeIs('ad.create')">
                        {{ __('Ajouter une annonce') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('ad.create') }}" :active="request()->routeIs('ad.create')">
                        {{ __('Articles') }}
                    </x-jet-nav-link>
                </div>


            </div>


            <div class="hidden sm:flex sm:items-center sm:ml-6">

                
                <!-- Teams Dropdown -->
                @if (Route::has('login'))
                <div class="hidden top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <div class="ml-4 relative">
                    <x-jet-dropdown align="right" width="48">
                        
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
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
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Param??tres de mon compte') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('G??rer mon Profil') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                           
                            
                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Mes annonces') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Ma messagerie') }}
                            </x-jet-dropdown-link>

                            <div class="border-t border-gray-100"></div>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Me d??connecter') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                    
                </div>
                        
                @else
                        
                        <x-jet-nav-link href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500">
                        {{ __('Se connecter') }}
                    </x-jet-nav-link>
                        @if (Route::has('register'))
                            
                            <x-jet-nav-link href="{{ route('register') }}" :active="request()->routeIs('/register')" class="ml-4 text-sm text-gray-700 dark:text-gray-500">
                        {{ __("S'inscrire") }}
                    </x-jet-nav-link>
                        @endif
                    @endauth
                </div>
                @endif
                
            </div>
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
       

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            

            <div class="mt-3 space-y-1">
                <x-jet-responsive-nav-link href="" :active="request()->routeIs('')">
                        {{ __('Voir les annonces') }}
                </x-jet-responsive-nav-link>

                <x-jet-responsive-nav-link href="{{ route('ad.create') }}" :active="request()->routeIs('ad.create')">
                        {{ __('Ajouter une annonce') }}
                </x-jet-responsive-nav-link>

                <x-jet-responsive-nav-link href="{{ route('ad.create') }}" :active="request()->routeIs('ad.create')">
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
                        {{ __('Se d??connecter') }}
                    </x-jet-responsive-nav-link>
                </form>             
            </div>
        </div>
    </div>
    </div>
</nav>
    
@if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            

        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        @stack('modals')
        @livewireScripts
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>


