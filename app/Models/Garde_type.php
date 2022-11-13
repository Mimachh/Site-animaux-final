<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garde_type extends Model
{
    public function annonce()
    {
        return $this->belongsToMany('App\Models\annonces');
    }
    use HasFactory;
}
