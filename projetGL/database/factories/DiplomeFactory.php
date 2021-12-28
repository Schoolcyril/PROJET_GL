<?php

namespace Database\Factories;

use App\Models\Apprenant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\date;

class DiplomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'année_obtention'=> $this->faker->date(),
            'apprenant_id'=> Apprenant::all()->random()->id,
            'mention'=>$this->faker->randomElement(['passable','bien','très bien','excellent'])
        ];
    }
}
