<?php

namespace App\Models;
use App\Models\Formation;
use App\Models\Matiere;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'examens';

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
    protected $fillable = ['date', 'Heure_deb', 'Heure_fin','matiere_id','formation_id'];

    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }
    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }
}
