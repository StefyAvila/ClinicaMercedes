<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Enfermero;
use App\Models\Doctore;
use App\Models\Pacient;

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

        Enfermero::factory(500)->create();
        Doctore::factory(500)->create();
        Pacient::factory(500)->create();
    }
}
