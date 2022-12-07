<div>
    <span id="js-count">{{ auth()->user()->unreadNotifications->count()}}</span>
    @foreach(auth()->user()->notifications as $notification)
        <h1>{{$notification}}</h1>
    @endforeach
</div>
