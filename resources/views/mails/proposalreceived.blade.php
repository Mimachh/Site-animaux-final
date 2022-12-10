@component('mail::message')
# Demande de garde 

Salut {{ $proposal->user->name}},

Tu as reçu une nouvelle demande de garde. <br>
Va vite y jeter un oeil !

@component('mail::button', ['url' => 'http://127.0.0.1:8001/proposals/'.$proposal->id.'/'])
Voir la demande
@endcomponent

Merci d'utiliser l'application,<br>
{{ config('app.name') }}
@endcomponent
