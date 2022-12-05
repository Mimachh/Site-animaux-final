<div>
    @if($proposal->validated === 2)
    <x-jet-button wire:click="accepted" class="bg-blue-600"> Accepter </x-jet-button>
    @endif
</div>

