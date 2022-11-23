<div x-data="{ open:false }" @flash-message.window="open = true; setTimeout(() =>open = false, 6000);" class="{{ $type ? $colors[$type] : '' }} container mx-auto mt-3">
    <div x-show="open" x-cloak class=" md:mx-32 lg:mx-32 mt-2 border-2 px-1 py-2 rounded text-center">
        {{ $message }}
    </div>
</div>
