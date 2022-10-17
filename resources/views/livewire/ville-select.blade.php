<div>
<x-jet-label for="villes_france">Choisir votre ville :</x-jet-label>
<x-jet-input list="villes_france"   wire:model='query'/>

@if (strlen($query) > 2)
    <datalist id="villes_france">

    @if (count($villes) > 0)
        @foreach ($villes as $ville)

    <option value="{{$ville->ville_departement}}-{{$ville->ville_nom}}-{{$ville->ville_code_postal}}"></option>

  
        @endforeach
@endif
</datalist>

@endif
</div>


