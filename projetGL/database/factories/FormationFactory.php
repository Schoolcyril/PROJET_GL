<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_for' => Str::random(10),
            'code_for' => Str::random(10),
            'date_debut' => $this->faker->date(),
            'date_fin' => $this->faker->date(),
            'category_id' => Category::all()->random()->id
        ];
    }
}
