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
      
        $validated = $request->validated();

        $annonces = new annonces();
        
        
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
        

        
        /* Partie pour checkbox 
        implode(', ', $annonces->garde_type= $validated['garde_type']);
        $annonces->animaux_gardes= $validated['animaux_gardes'];
        $annonces->description = $validated['description'];
        $annonces->price = $validated['price'];
        */

        

        $annonces->save();


        return redirect()->route('create.ad');

        /*
        if ($request->validated->isValid()) {
            return view
        }*/
        
    }




}
