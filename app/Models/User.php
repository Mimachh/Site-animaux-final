<?php

namespace App\Models;

use App\Models\Annonce;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'email', 'password', 'sex', 'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function ads()
    {
        return $this->hasMany('App\Models\Annonce');
    }

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    public function animals()
    {
        return $this->hasMany('App\Models\Animal');
    }

    public function fav()
    {
        return $this->belongsToMany('App\Models\Annonce');
    }

    /* public function demandes()
    {
        return $this->hasMany('App\Models\Demande');
    } Pas besoin je crois */

    public function proposals()
    {
        return $this->hasMany('App\Models\Proposal');
    }

}
