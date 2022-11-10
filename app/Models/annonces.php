<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class annonces extends Model
{
    use HasFactory;

    public function scopeOnline($query)
    {
        return $query->where('status', 1);
    }


/* Relations */

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

    public function fav()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function fav_added()
    {
        if (auth()->check()) {
            return auth()->user()->fav->contains('id', $this->id);      
        }
        
    }
    
/* Fin Relations */


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
