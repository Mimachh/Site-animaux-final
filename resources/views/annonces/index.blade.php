<x-app-layout>
   
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Les annonces en ligne') }}
        </h1>
    </x-slot>

     
        
        <div class="md:flex-wrap md:flex md:mx-32 xs:mx-auto mt-5">
            <div class="bg-white">
                <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                    
                    <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                 
      
                        @foreach($annonces as $annonce)
   
       
                            <livewire:ad-fav :annonce="$annonce"/>
        
                        @endforeach
   
                    </div> 
                </div>
            </div>
        </div>
        

              

</x-app-layout>