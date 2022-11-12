<div x-data="{ open:false }" @flash-message.window="open = true; setTimeout(() =>open = false, 6000);" class="{{ $type ? $colors[$type] : '' }} container mx-auto mt-3">
    <div x-show="open" x-cloak class=" border-2 px-1 py-2 rounded">
        {{ $message }}
    </div>
</div>
