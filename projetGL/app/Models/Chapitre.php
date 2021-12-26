<?php

namespace App\Models;
use App\Models\Matiere;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model
{
    protected $fillable=['titre','resumé','matiere_id'];

    use HasFactory;

    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }
}
