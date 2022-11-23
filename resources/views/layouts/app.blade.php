<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        <script src="https://cdn.tailwindcss.com"></script>


        <style>
            [x-cloak] { display: none;}
        </style>

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/app_perso.js') }}" defer></script>

    </head>

    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="shadow ban">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8" >
                        {{ $header }}
                    </div>
                </header>
            @endif
            
            <!-- Page Content -->
            
            <main>
            <!-- Messages flash -->
                @if(session()->has('alert'))
                    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="border-red-700 text-red-700 bg-red-200 border-2 px-1 py-2 rounded text-center md:mx-32 lg:mx-32 mt-2" role="alert">
                        <strong class="font-bold">Holy smokes!</strong>
                        <span class="block sm:inline">{{ session()->get('alert') }}</span>  
                    </div>
                @endif
                @if(session()->has('success'))
                    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="border-green-700 text-green-700 bg-green-200 border-2 px-1 py-2 rounded text-center md:mx-32 lg:mx-32 mt-2" role="alert">
                        <strong class="font-bold">Bravo !</strong>
                        <span class="block sm:inline"> {{ session()->get('success') }}</span> 
                    </div>
                @endif   
                
                @livewire('flash')  

            <!-- Fin Messages flash -->
            
            
                {{ $slot }}
               
                @yield('content')
                
            </main>
        </div>

        @stack('modals')
    
        <script src="../../js/app.js"></script>
        <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        @livewireScripts
    </body>
</html>
