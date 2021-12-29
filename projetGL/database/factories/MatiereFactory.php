<?php

namespace Database\Factories;

use App\Models\Enseignant;
use Illuminate\Support\Str;
use App\Models\Matiere;
use Illuminate\Database\Eloquent\Factories\Factory;

class matiereFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model =Matiere::class;
    public function definition()
    {
        return [
            'nom'=> Str::random(10),
            'code_matiere'=> Str::random(5),
            'nbre_heures'=>$this->faker->randomDigitNotNull(),
            'enseignant_id' => Enseignant::all()->random()->id
        ];
    }
}
