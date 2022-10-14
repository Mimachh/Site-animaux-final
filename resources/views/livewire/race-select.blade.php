
<p wire:loading> Chargement</p>
<p>
<select wire:model="espece_id">
    @foreach ($especes_animaux as $espece) 
    <option value="{{$espece->id}}"> {{$espece->espece}}</option>
    @endforeach

</select>
</p>

<p>
<select id="race_id" wire:model='race_id'>
<option value="">Selectionnez un truc</option>
@foreach ($races as $race)
<option value="{{ $race->id }}">{{ $race->race_animal }}</option>
@endforeach



</select>
</p>

