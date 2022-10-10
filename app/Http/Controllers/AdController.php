<?php

namespace App\Http\Controllers;

use auth;
use App\Models\annonces;
use Illuminate\Http\Request;
use App\Http\Requests\AdStore;

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
      
        $arraytostring = $request->animaux_gardes;
        $string = implode(', ', $arraytostring);
        $arraytostring2 = $request->garde_type;
        $string2 = implode(', ', $arraytostring2); 
      

        $annonces = annonces::create([
            'name' => $request->name,
            'animaux_gardes' => $string,
            'garde_type' => $string2,
            'description' =>  $request->description,
            'price' => $request->price,
           

        ]);
        $annonces->user_id = auth()->user()->id; 
        
        $annonces->save();

        
        
        return redirect()->route('create.ad'); 

        
    }




}
