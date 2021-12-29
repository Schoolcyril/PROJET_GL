<?php

namespace Database\Seeders;
use App\Models\Matiere;
use App\Models\Examen;
use Illuminate\Database\Eloquent\Factories\MatiereFactory;
use Illuminate\Database\Eloquent\Factories\ExamenFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Matiere::factory(10)->create();
        //\App\Models\Examen::factory(10)->create();
    }
}
