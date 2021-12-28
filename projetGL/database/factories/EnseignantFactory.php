<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EnseignantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=>Str::random(6),
            'numero_tel'=>Str::random(9),
            'email'=>$this->faker->email(),
            'adresse'=>Str::random(5),
            'domaine'=>$this->faker->randomElement(['mathematique','informatique','français','anglais'])
        ];
    }
}
