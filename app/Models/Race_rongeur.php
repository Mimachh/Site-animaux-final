<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race_rongeur extends Model
{
    use HasFactory;

    public function espece()
    {
        return $this->belongsTo('App\Models\Espece_animaux')->withTimestamps();
    }
}
