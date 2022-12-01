
{{$annonce->name }}

<form wire:submit.prevent="store">

    <textarea  disabled >Bonjour {{$annonce->name}} j'ai besoin de toi pour garder :</textarea>


    <select name="animal_1" id="first_animal_id" wire:model="first_animal_id">
        <option value="">Choisir l'animal à garder</option>
            @foreach(auth()->user()->animals as $animal)
                <option value="{{$animal->id}}">{{$animal->animal_name}}</option>    
            @endforeach                         
    </select>

    <select name="animal_2" id="second_animal_id" wire:model="second_animal_id">
        <option value="">Choisir un animal à garder</option>
        @foreach(auth()->user()->animals as $animal)
                <option value="{{$animal->id}}">{{$animal->animal_name}}</option>    
            @endforeach                         
    </select>

    <select name="animal_3" id="third_animal_id" wire:model="third_animal_id">
        <option value="">Choisir un animal à garder</option>
        @foreach(auth()->user()->animals as $animal)
                <option value="{{$animal->id}}">{{$animal->animal_name}}</option>    
            @endforeach                         
    </select>


 
    <div class="flex items-start">
        <div class="ml-3 text-sm mr-8">
            <x-jet-label for="start_date" value="{{ __('Du :') }}"/>
        </div>
        <div class="flex h-5 items-center">
            <x-jet-input id="start_date" wire:model="start_date" name="start_date" type="date"/>   
        </div>
        <div class="ml-16 text-sm mr-8">
            <x-jet-label for="end_date" value="{{ __('Au :') }}"/>
        </div>
        <div class="flex h-5 items-center">
            <x-jet-input id="end_date" wire:model='end_date' name="end_date" type="date"/>   
        </div>
    </div>

    <button type="submit">Save Contact</button>

</form>
