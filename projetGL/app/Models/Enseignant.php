<?php

namespace App\Models;
use App\Models\Formation;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'enseignants';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'numero_tel', 'email', 'adresse', 'domaine'];

    public function formations()
    {
        return $this->belongsToMany(Formation::class);
    }
}
