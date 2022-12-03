<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function annonce()
    {
        return $this->belongsTo('App\Models\Annonce');
    }

    public function demande()
    {
        return $this->hasOne('App\Models\Demande');
    }

    protected $fillable = [ 'annonce_id', 'validated'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->user_id = auth()->user()->id;
        });
    }

}
