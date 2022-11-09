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
use App\Models\Garde_type;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Auth as FacadesAuth;


class AdController extends Controller
{
   
   public function index()
   {
    $annonces = annonces::online()->latest()->get();

    return view('annonces.index', [
        'annonces' => $annonces
    ]);

   }

    /* public function create() 
    {
       

        $visit = Garde_type::find(2);
        $home = Garde_type::find(1);
           
        $chats = Espece_animaux::find(1);
        $chiens = Espece_animaux::find(2);
        $poissons = Espece_animaux::find(3);
        $rongeurs = Espece_animaux::find(4);
        $oiseaux = Espece_animaux::find(5);
        $reptiles = Espece_animaux::find(6);
        $ferme = Espece_animaux::find(7);
        $autre = Espece_animaux::find(8);
       
     
       return view('create_ad', [ 'chats'=>$chats, 'chiens'=>$chiens, 'poissons'=>$poissons,
        'rongeurs'=>$rongeurs, 'oiseaux'=>$oiseaux, 'reptiles'=>$reptiles,
        'ferme'=>$ferme, 'autre'=>$autre, 'visit'=>$visit, 'home'=>$home]);
    } 
    
    
    public function store(AdStore $request)
    {
        $chats = Espece_animaux::find(1);
        $chiens = Espece_animaux::find(2);
        $poissons = Espece_animaux::find(3);
        $rongeurs = Espece_animaux::find(4);
        $oiseaux = Espece_animaux::find(5);
        $reptiles = Espece_animaux::find(6);
        $ferme = Espece_animaux::find(7);
        $autre = Espece_animaux::find(8);
        
        $visit = Garde_type::find(2);
        $home = Garde_type::find(1);
      
       
       
      

        $annonces = annonces::updateOrCreate([
            
            'visit' => $request->visit,
            'home' => $request->home,
            'chiens' => $request->chiens,
            'chats' => $request->chats,
            'poissons' =>$request->poissons,
            'rongeurs' =>$request->rongeurs,
            'oiseaux' =>$request->oiseaux,
            'reptiles' =>$request->reptiles,
            'ferme' =>$request->ferme,
            'autre' =>$request->autre,
            'description' =>  $request->description,
            'price' => $request->price,
           
 
        ]);
        $annonces->name = auth()->user()->name;
        $annonces->user_id = auth()->user()->id;        
        $annonces->save();

        return redirect()->route('create.ad'); 

    } */




}
