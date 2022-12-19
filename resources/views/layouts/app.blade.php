<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
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

    <body class="font-sans antialiased bg-white">
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
            
            <!-- Button Back --> 
            @if(isset($buttonBack))    
                <div class="mt-2">
                    {{ $buttonBack}}
                </div>
            @endif
            
            <!-- Page Content -->

            <main>
                <!-- Messages flash -->
        
                    @livewire('flash')
                    @include ('partials.messages')  

                <!-- Fin Messages flash -->
            
            
                {{ $slot }}
               
                @yield('content')
                
            </main>
        </div>

        @stack('modals')
        
    <!-- SCRIPTS -->

       <!-- peut être supprimé je pense <script src="../../js/app.js"></script> -->
       <!-- peut être supprimé je pense  <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script> -->

        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        @livewireScripts

        
        
        <!-- Sweet Alert 2 Confirmation Delete Annonce -->
            <script>
                window.addEventListener('show-delete-confirmation', event => {
                    Swal.fire({
                        title: 'Supprimer cette annonce ?',
                        text: "Cette action est irreversible !",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        cancelButtonText: 'Non',
                        confirmButtonText: 'Confirmer !'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Livewire.emit('deleteConfirmed')
                            }
                    })
                });
                
            </script>
        <!-- Fin Sweet Alert 2 Confirmation Delete Annonce -->
        <!-- Sweet Alert 2 Confirmation Delete Animal -->
            <script>
                window.addEventListener('show-delete-confirmation-animal', event => {
                    Swal.fire({
                        title: 'Supprimer cette fiche ?',
                        text: "Cette action est irreversible !",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        cancelButtonText: 'Non',
                        confirmButtonText: 'Confirmer !'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Livewire.emit('deleteAnimalConfirmed')
                            }
                    })
                });
                
            </script>
        <!-- Fin Sweet Alert 2 Confirmation Delete Animal-->

        
        @auth
            <script src="{{ asset('js/app.js') }}" defer></script>
            <script>
                window.User = {
                    id: {{ optional(auth()->user())->id }}
                }
            </script>
        @endauth

        <!-- Script de secours pour les non connecté, import d'alpine -->
            <script src="{{ asset('js/perso.js') }}" defer></script>
        <!-- Fin script de secours pour les non connecté, import d'alpine -->

            <script src="{{ asset('js/app_perso.js') }}" defer></script>
    <!-- FIN SCRIPTS -->
    </body>
</html>
