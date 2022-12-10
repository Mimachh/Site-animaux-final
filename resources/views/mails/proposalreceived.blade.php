@component('mail::message')
# Nouvelle demande de garde 

Salut {{ $proposal->annonce->user->name}},

{{$proposal->user->name }} a besoin de toi pour garder {{ $demande->first_animal->animal_name }}. <br>
Va vite y jeter un oeil !

@component('mail::button', ['url' => 'http://127.0.0.1:8001/proposals/'.$proposal->id.'/', 'color' => 'success'])
Voir la demande
@endcomponent

Merci d'utiliser l'application,<br>
{{ config('app.name') }}
@endcomponent
