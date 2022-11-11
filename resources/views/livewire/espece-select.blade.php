
<div class=" mt-1">
    <p wire:loading></p>
    <div>
        <select class="block px-3 py-1.5 text-base font-normal text-gray-700 
                       bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0
                       focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                id="espece_id" wire:model="espece_id">
            <option value="">Choisir une espece</option>
            @foreach($especes as $espece)
                <option class="" value="{{$espece->id}}">{{$espece->espece}}</option>
            @endforeach
        </select>
    </div>
    @if($races->count() > 0)
    <div>
        <select id="race_id" wire:model="race_id" 
                class="my-3 block px-3 py-1.5 text-base font-normal text-gray-700 
                       bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0
                       focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
            @foreach($races as $race)       
            <option value="{{$race->id}}">{{$race->race_animal}}</option>
            @endforeach
        </select>   
    </div>
    @endif
</div>


