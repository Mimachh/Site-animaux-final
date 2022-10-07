<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <!-- Fonts -->
         <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
@livewireStyles

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="shadow"  style="background-color: #C93756">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8" >
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                
                {{ $slot }}
                
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        <script src="../path/to/flowbite/dist/flowbite.js"></script>
        <script src="../path/to/flowbite/dist/datepicker.js"></script>
        <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>


    </body>
</html>
