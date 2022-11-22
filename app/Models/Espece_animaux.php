<?php

namespace App\Models;



use App\Models\Annonce;
use App\Models\Liste_race;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Espece_animaux extends Model
{
    /**
     * The table associated with the model.
     * @var string
    */ 
    protected $table = 'especes_animaux';
    
   /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    public $incrementing = false;
   
    /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    use HasFactory;

    public function races()
    {
        return $this->hasMany(Liste_race::class);
    }

    public function ads()
    {
        return $this->hasMany('App\Models\Annonce');
    }
    
    
}
