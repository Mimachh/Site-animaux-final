<?php

namespace App\Models;


use App\Models\Espece_animaux;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Liste_race extends Model
{
    use HasFactory;

    public function espece()
    {
        return $this->belongsTo(Espece_animaux::class);
    }

     /**
     * The table associated with the model.
     * @var string
    */ 
    protected $table = 'liste_race';
}
