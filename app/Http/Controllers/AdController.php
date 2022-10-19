<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\annonces;
use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use App\Models\villes_france;

use App\Http\Requests\AdStore;
use App\Models\Espece_animaux;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Actions\Fortify\CreateNewUser;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Auth as FacadesAuth;


class AdController extends Controller
{
    
    public function create() 
    {
        
       
           
        $chats = Espece_animaux::find(1);
        $chiens = Espece_animaux::find(2);
        $poissons = Espece_animaux::find(3);
        $rongeurs = Espece_animaux::find(4);
        $oiseaux = Espece_animaux::find(5);
        $reptiles = Espece_animaux::find(6);
        $ferme = Espece_animaux::find(7);
        $autre = Espece_animaux::find(8);
        
        
       return view('create_ad', ['chats'=>$chats, 'chiens'=>$chiens, 'poissons'=>$poissons,
        'rongeurs'=>$rongeurs, 'oiseaux'=>$oiseaux, 'reptiles'=>$reptiles,
        'ferme'=>$ferme, 'autre'=>$autre]);
    }
    
    public function store(AdStore $request)
    {
       
      

        $arraytostring = $request->animaux_gardes;
        $string = implode(', ', $arraytostring);
        $arraytostring2 = $request->garde_type;
        $string2 = implode(', ', $arraytostring2); 
      

        $annonces = annonces::create([
            
            'animaux_gardes' => $string,
            'garde_type' => $string2,
            'description' =>  $request->description,
            'price' => $request->price,
            

        ]);
        $annonces->user_id = auth()->user()->id; 
        
        $annonces->save();

        
        
        return redirect()->route('create.ad'); 

       
        

         /* Marche pas if(!Auth::check())
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required',
            ]);
        $user = User::create([

            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            
            ]); 

          
 
        }; */
    }




}
