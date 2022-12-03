<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

   /* public function user()
    {
        return $this->belongsTo('App\Models\User');
    } Pas besoin je crois */

    public function proposal()
    {
        return $this->belongsTo('App\Models\Proposal');
    }


    protected $fillable = [
        'content', 'start_date', 'end_date',
        'first_animal_id', 'second_animal_id', 'third_animal_id',
        'garde_id', 'mail', 'phone', 'number_visit', 'proposal_id',
    ];
}
