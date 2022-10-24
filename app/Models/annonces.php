<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class annonces extends Model
{
    use HasFactory;

    public function scopeOnline($query)
    {
        return $query->where('status', 1);
    }


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function especes()
    {
        return $this->hasMany('App\Models\Espece_animaux');
    }

    public function ville()
    {
        return $this->hasOne('App\Models\villes_france');
    }
    

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        
        'description', 'price', 'visit', 'home', 'name', 'chats', 'chiens', 'poissons', 'rongeurs', 
        'oiseaux', 'reptiles', 'ferme', 'autre', 'ville', 'start_watch', 'end_watch', 
    ];
  
    

}
