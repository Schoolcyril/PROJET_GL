<?php

namespace App\Models;
use App\Models\Enseignant;
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
    protected $fillable = ['date', 'Heure_deb', 'Heure_fin','enseignant_id'];

}
