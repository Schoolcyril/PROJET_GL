<?php

namespace App\Models;
use App\Models\Matiere;
use App\Models\Examen;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $table = 'formations';
    protected $primaryKey = 'id';
   protected $fillable = ['code_for', 'nom_for', 'date_debut', 'date_fin', 'category_id'];


   public function categorie()
    {
        return $this->belongsTo(Category::class);
    }

}

