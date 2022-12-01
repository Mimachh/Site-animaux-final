<?php

namespace App\Http\Livewire;

use App\Models\Annonce;
use App\Models\Demande;
use Livewire\Component;


use Illuminate\Http\Response;
use App\Http\Livewire\Demandes;
use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Demandes extends Component
{

    public function index()
    {
        //
    }

  /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return Response
     */

    public function create(Annonce $annonce)
    {
        
    

     return view('demandes.create', compact('annonce'));
    }


    public  $content, $annonce, $first_animal_id, 
            $second_animal_id, $third_animal_id,
            $start_date, $end_date, $garde_id, $number_visit,
            $phone, $mail, $user_id, $prix, $i, $price, $prix_date;


    public function store(Request $request)
    {
        /* Contenu par défaut */

            $this->content = 'Bonjour '. $this->annonce->name . " acceptes-tu de garder : ";
       
        
        /* Boucle pour calculer le nombre d'animaux */

            for($i = 0; $i < 1; $i++)
            {
                if($this->first_animal_id != null)
                {
                    $this->i++;
                
                };
            
                if($this->second_animal_id != null)
                {
                    $this->i++;
                
                };
                if($this->third_animal_id != null)
                {
                    $this->i++;
                
                };
                
                    $result = $this->i;
                
            }

            
           
           
        /* Calcul pour le nombre de jours de garde */

            /* $start_dates =  date('d/m/Y', strtotime($this->start_date)); */

            $timestamp_start = strtotime($this->start_date);
            $timestamp_end = strtotime($this->end_date);

            $timestamp_left = $timestamp_end - $timestamp_start;
            $days = ($timestamp_left / 86400) + 1;

            


        /* Calcul des prix */

            $price_animals = ($this->annonce->price * $this->i) / 100;
            $prix_date = ($price_animals * $days);
            $prix_commission = $prix_date * 2;

            dd($prix_commission);


    }

    


    
    public function show(Demande $demande)
    {
        //
    }

    
    public function edit(Demande $demande)
    {
        //
    }

    public function update(Request $request, Demande $demande)
    {
        //
    }

    
    public function destroy(Demande $demande)
    {
        //
    }

    public function render()
    {
        return view('livewire.demandes');
    }
}
