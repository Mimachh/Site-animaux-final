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
        return $this->belongsTo('App\Models\User')->withTimestamps();
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'visit', 'home', 'start_watch', 'end_watch', 'watch_cat', 'watch_dog', 'watch_rabbit',
        'watch_bird', 'watch_reptile', 'watch_farm_animal', 'watch_other_animal', 'description', 
        'price',
    ];
    /* Ajout pour les checkbox 
    protected $guarded = []; */

    

}
