<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Diplome;
use App\Models\Enseignant;
use App\Models\Formation;
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
        Diplome::factory(10)->create();
        Enseignant::factory(10)->create();

    }
}
