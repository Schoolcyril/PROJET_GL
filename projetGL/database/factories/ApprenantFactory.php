<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApprenantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'nom'=>$this->faker->firstName(),
             'numero_tel'=>$this->faker->phoneNumber(),
             'email'=>$this->faker->unique()->email(),
             'adresse'=>$this->faker->address(),
             'matricule'=>Str::random(10)
        ];
    }
}
