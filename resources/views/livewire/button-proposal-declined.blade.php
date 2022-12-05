<div>
    @if($proposal->validated === 2)
        <x-jet-button wire:click="declined" class="bg-red-600"> Refuser </x-jet-button> 
    @endif
</div>
