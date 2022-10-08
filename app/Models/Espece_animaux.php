<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espece_animaux extends Model
{
    use HasFactory;

    public function especes()
    {
        return $this->hasMany('race_chat', 'Race_chien', 'Race_oiseaux', 'Race_poisson'
        , 'Race_reptile', 'Race_rongeur', 'Animaux_ferme', 'Race_other_animaux')->withTimestamps();
    }
}
