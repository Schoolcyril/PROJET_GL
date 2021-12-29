<?php

namespace Database\Factories;

use App\Models\Matiere;
use App\Models\Examen;
use App\Models\Formation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;


class ExamenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model =Examen::class;
    public function definition()
    {
        return [
           'date'=>$this->faker->date(),
           'Heure_deb'=>$this->faker->time(),
           'Heure_fin'=>$this->faker->time(),
           'matiere_id'=>Matiere::all()->random()->id,
           'formation_id'=>Formation::all()->random()->id,
        ];
    }
}
