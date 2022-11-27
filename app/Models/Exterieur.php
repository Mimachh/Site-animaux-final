<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exterieur extends Model
{
    public function annonces()
    {
        return $this->hasMany('App\Models\Annonce');
    }

    use HasFactory;
}
