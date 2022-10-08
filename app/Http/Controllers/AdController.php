<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdStore;
use App\Models\annonces;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function create() 
    {
       /* $ads = annonces::online()->latest()->get();
       
       return $ads; */
       /* $ads = annonces::all();

       return $ads; */

       return view('create_ad');
    }

    public function store(AdStore $request)
    {
      
       /* 
                    Fonction save sans l'épuration du validated
        
       $validated = $request->validated(); 

       $annonces = new annonces(); */
    
        

       

    $validated = $request->validated([
            'visit' => 'required', 
            'home' => 'required',
            'start_watch' => 'required',
            'end_watch' => 'required',
            'watch_cat' => 'required',
            'watch_dog' => 'required',
            'watch_rabbit' => 'required',
            'watch_bird' => 'required',
            'watch_reptile' => 'required',
            'watch_farm_animal' => 'required',
            'watch_other_animal' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
        

    

        /* 
            Avec la fonction save
        
        $annonces->visit = $validated['visit'];
        $annonces->home = $validated['home'];
        $annonces->watch_cat = $validated['watch_cat'];
        $annonces->watch_dog = $validated['watch_dog'];
        $annonces->watch_rabbit = $validated['watch_rabbit'];
        $annonces->watch_bird = $validated['watch_bird'];
        $annonces->watch_reptile = $validated['watch_reptile'];
        $annonces->watch_farm_animal = $validated['watch_farm_animal'];
        $annonces->watch_other_animal = $validated['watch_other_animal'];
        $annonces->description = $validated['description'];
        $annonces->price = $validated['price']; 
        
        $annonces->start_watch = $validated['start_watch'];
        $annonces->end_watch = $validated['end_watch']; */
        
         /*
                    Tentative de checkbox

        $annonces->garde_type= $validated['garde_type'];
        $annonces->animaux_gardes= $validated['animaux_gardes'];
        $annonces->description = $validated['description'];
        $annonces->price = $validated['price'];
        */

        $annonces = annonces::create($validated);

        /*
            Fonction save avec les éléments en vert
        $annonces->save();*/


        return redirect()->route('create.ad');

        
    }




}
