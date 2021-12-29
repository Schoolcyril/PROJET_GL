<?php

namespace App\Models;
use App\Models\Matiere;
use App\Models\Examen;
use App\Models\Enseignant;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $table = 'formations';
    protected $primaryKey = 'id';
   protected $fillable = ['code_for', 'nom_for', 'date_debut', 'date_fin', 'category_id'];


   public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function matieres()
    {
        return $this->belongsToMany(Matiere::class);
    }
    public function enseignants()
    {
        return $this->belongsToMany(Enseignant::class);
    }
    public function examens()
    {
        return $this->hasMany(Examen::class);
    }



}

