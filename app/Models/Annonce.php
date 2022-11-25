<?php

namespace App\Models;

use App\Models\User;
use App\Models\villes_france;
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
    public function ville()
    {
        return $this->belongsTo('App\Models\Ville');
    }
    public function garde()
    {
        return $this->belongsTo('App\Models\Garde');
    }
    public function especes()
    {
        return $this->belongsTo('App\Models\Espece');
    }
    public function esp()
    {
        return $this->belongsTo('App\Models\Espece_animaux');
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
        
        'user_id', 'description', 'price', 'visit', 'home', 'name', 'chats', 'chiens', 'poissons', 'rongeurs', 
        'oiseaux', 'reptiles', 'ferme', 'autre', 'ville', 'start_watch', 'end_watch', 'garde_id', 'photo',
    ];
}
