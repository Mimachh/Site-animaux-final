<?php

namespace App\Models;

use App\Models\User;
use App\Models\Garde_type;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Annonce extends Model
{
    use HasFactory;
    use HasFactory;

    public function scopeOnline($query)
    {
        return $query->where('status', 1);
    }


/* Relations */

    public function user()
    {
        return $this->belongsTo(User::class);
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
    public function garde()
    {
        return $this->hasOne('App\Models\Garde_type');
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
        
        'user_id', 'description', 'price', 'visit', 'home', 'name', 'chats', 'chiens', 'poissons', 'rongeurs', 
        'oiseaux', 'reptiles', 'ferme', 'autre', 'ville', 'start_watch', 'end_watch', 'garde_type',
    ];
}