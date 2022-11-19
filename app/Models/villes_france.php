<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class villes_france extends Model
{
    use HasFactory;

 /**
     * The table associated with the model.
     * @var string
    */ 
    protected $table = 'villes_france';

    protected $primaryKey = 'ville_id';

    public function annonces()
    {
        return $this->belongsToMany('App\Models\annonce');
    }
}


