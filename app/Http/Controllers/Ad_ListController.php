<?php

namespace App\Http\Controllers;

use App\Models\ads_list;
use Illuminate\Http\Request;

class Ad_ListController extends Controller
{
    public function index() 
    {
       /* $ads = ads_list::online()->latest()->get();
       
       return $ads; */
       $ads = ads_list::all();

       return $ads;
    }
}
