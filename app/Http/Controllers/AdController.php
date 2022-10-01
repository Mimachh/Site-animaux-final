<?php

namespace App\Http\Controllers;

use App\Models\annonces;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function create() 
    {
       $ads = annonces::online()->latest()->get();
       
       return $ads;
    }

}
