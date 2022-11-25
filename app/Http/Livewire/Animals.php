<?php

namespace App\Http\Livewire;

use App\Models\Animal;
use Livewire\Component;

class Animals extends Component
{
    /* Séparation des pages */

    public $currentPage = 1;
    public $pages = [1=>1,
                    2=>2];

    public function goToPreviousPages()
    {
        $this->currentPage--;
    }
    public function goToNextPages()
    {
        $this->currentPage++;
    }
/* Fin séparation page */


 /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
    $animals = Animal::paginate(8);
      

        return view('animals.index', ['animals' => $animals]);
}

/* Début du formulaire */
    

/* Validation du formulaire */

public $nom, $personnalité, $chiens, $chiennes, $chats, $chattes, 
       $rongeurs, $rongeuses, $birds, $reptiles, $owner, $espece, $race, $races;


public function mount()
   {
       $this->races = collect();
   
   
   }
   
    public function updatedEspece($newValue)
   {
       $this->races = Liste_race::where('espece_id', $newValue)->orderBy('race_animal')->get();
   }

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    return view('animals.create');
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    //
}

/**
 * Display the specified resource.
 *
 * @param  \App\Models\Animal  $animal
 * @return \Illuminate\Http\Response
 */
public function show(Animal $animal)
{
    
    return view('animals.show', compact('animal'));
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\Models\Animal  $animal
 * @return \Illuminate\Http\Response
 */
public function edit(Animal $animal)
{
    //
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Models\Animal  $animal
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, Animal $animal)
{
    //
}

/**
 * Remove the specified resource from storage.
 *
 * @param  \App\Models\Animal  $animal
 * @return \Illuminate\Http\Response
 */
public function destroy(Animal $animal)
{
    //
}

    public function render()
    {
        return view('livewire.animals');
    }
}
