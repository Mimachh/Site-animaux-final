<?php

namespace App\Http\Livewire;

use App\Models\Animal;
use App\Models\Annonce;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Annonces extends Component
{
    use AuthorizesRequests;
    use WithPagination;
   
    public function index()
    {
        $annonces = Annonce::paginate(8);
      

        return view('annonces.index', ['annonces' => $annonces]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('annonces.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }
    public $annonce;
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function show(Annonce $annonce)
    {       
       
       $animal = Animal::where('user_id', $annonce->user_id)->get();
      
       
       foreach($animal as $a) {
           $animals = $a->get();
       }
      
  dd($animal);
        
        return view('annonces.show', ['annonce' => $annonce, 'animals' => $animals]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
   
    public function edit(Annonce $annonce)
    {
        $this->authorize('update', $annonce);
     
        return view ('annonces.edit', compact('annonce'));
       
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annonce $annonce)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annonce $annonce)
    {
        $this->authorize('destroy', $annonce);
    }

    

    public function render()
    {
        return view('livewire.annonces');
    }
}
