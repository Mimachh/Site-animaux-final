<x-app-layout>

    <x-slot name="header">
    
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Tableau de bord de ') }}{{auth()->user()->name}}
            </h2>
     
    </x-slot>
    
   

                 @livewire('dashboard-pages')

       
            
</x-app-layout>
