
@if($proposal->validated === 2)
    <div>
        <x-jet-button wire:click="declined" class="bg-red-600"> Refuser </x-jet-button> 
    </div>
@endif

