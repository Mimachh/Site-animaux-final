<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-200 leading-tight text-center">
            Fiche de {{$animal->animal_name}}
        </h1>
    </x-slot>

{{$animal->espece->espece}}
{{$animal->race->race_animal}}
</x-app-layout>