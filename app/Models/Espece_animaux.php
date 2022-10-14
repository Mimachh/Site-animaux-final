<?php

namespace App\Models;



use App\Models\Liste_race;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Espece_animaux extends Model
{
    use HasFactory;

    public function races()
    {
        return $this->hasMany(Liste_race::class);
    }

    /**
     * The table associated with the model.
     * @var string
    */ 
    protected $table = 'especes_animaux';
}
