<?php

namespace Database\Factories;

use App\Models\Matiere;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChapitreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre'=>$this->faker->title(),
            'resumé'=>$this->faker->paragraph(3,true),
            'matiere_id'=>Matiere::all()->random()->id
            
        ];
    }
}
