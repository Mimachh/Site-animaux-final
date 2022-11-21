<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garde extends Model
{
    public function ads()
    {
        return $this->hasMany('App\Models\Annonce');
    }
    
    use HasFactory;
}
