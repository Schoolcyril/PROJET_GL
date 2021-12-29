<?php

namespace Database\Seeders;

use App\Models\Apprenant;
use App\Models\Category;
use App\Models\Chapitre;
use App\Models\Diplome;
use App\Models\Enseignant;
use App\Models\Formation;
use App\Models\Matiere;
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
       Category::factory(10)->create();
       Formation::factory(10)->create();
        Enseignant::factory(10)->create();
        Matiere::factory(10)->create();
        Chapitre::factory(10)->create();
        Apprenant::factory(10)->create();
        Diplome::factory(10)->create();

    }
}
