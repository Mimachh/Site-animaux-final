<x-app-layout>
   
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Les annonces en ligne') }}
        </h1>
    </x-slot>

        @section('content')
        <h1 class="text-3xl text-green-500 mb-3">coucou</h1>
        
        <div class="md:flex-wrap md:flex md:mx-32 xs:mx-auto">
      
        @foreach($annonces as $annonce)
   
       
        <livewire:ad-fav :annonce="$annonce"/>
        
        @endforeach
   
        </div> 
        @endsection

              

</x-app-layout>