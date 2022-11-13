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
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
   
   public function index()
   {
    $annonces = annonces::online()->latest()->get();

   

    return view('annonces.index', [
        'annonces' => $annonces,
    ]);

   }
}
