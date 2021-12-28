<?php

namespace App\Models;
use App\Models\Chapitre;
use App\Models\Formation;
use App\Models\Examen;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'matieres';

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
    protected $fillable = ['nom', 'code_matiere', 'nbre_heures'];

    public function chapitres()
    {
        return $this->hasMany(Chapitre::class);
    }

    public function formations()
    {
        return $this->belongsToMany(Formation::class);
    }
    public function examens()
    {
        return $this->belongsToMany(Examens::class);
    }
}
