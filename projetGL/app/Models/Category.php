<?php

namespace App\Models;
use App\Models\Formation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $fillable=['nom_cat','description'];

    use HasFactory;

    public function formations()
    {
        return $this->hasMany(Formation::class);
    }
}
