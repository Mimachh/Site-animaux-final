<?php

namespace App\Models;
use App\Models\Annonce;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garde_type extends Model
{

   


    public function annonces()
    {
        return $this->belongsToMany('App\Models\Annonce');
    }
    use HasFactory;
}
