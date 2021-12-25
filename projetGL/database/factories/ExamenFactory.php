<?php

namespace Database\Factories;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExamenFactory extends Factory
{
    /**
     *
     * /
     * /

     * @return array
     */

    public function definition()
    {
        return [
          'examen'=> $this->faker->date,
          'enseignant_id'=>$this->faker->number,
        ];
    }
}
