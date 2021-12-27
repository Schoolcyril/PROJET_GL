<?php

namespace App\Models;
use App\Models\Matiere;
use App\Models\Examen;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

   public function matieres()
    {
        return $this->belongsToMany(Matiere::class);
    }
    public function examens()
    {
        return $this->hasMany(Examen::class);
    }
}
