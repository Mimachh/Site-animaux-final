<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class animals_owned extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    protected $fillable = [
        
        'animal_name', 'owner', 'personnality', 'male_cats', 'female_cats', 'male_dogs', 'female_dogs', 
        'male_rongeurs', 'female_rongeurs', 'birds', 'reptiles', 'espece', 'race'
    ];
}



