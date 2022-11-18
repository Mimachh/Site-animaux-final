<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Annonce;
use App\Http\Request;

class Ads extends Component
{
    public function index()
    {
        $ads = Annonce::all();
        return view('ads.index', ['ads' => $ads]);
    }

    public $ads;
    public function create()
    {
        return view('ads.create');
    }
    /** 
     * Display the specified resource.
     * 
     * @param \App\Models\annonce $annonces
     * @return \Illuminate\Http\Response
     */
    public $annonces;
    public $price;
    public $user_id;
    public function show(Annonce $ads)
    {
       
     return view('ads.show', compact('ads'));   
    }
    
    public function render()
    {
        return view('livewire.ads');
    }
}
