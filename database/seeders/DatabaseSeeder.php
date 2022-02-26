<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            AboutUsSeeder::class,
            BlogCategorySeeder::class,
            ExtracurricularSeeder::class,
            FacilitySeeder::class,
            LearningOportunitySeeder::class,
            LearningProcessSeeder::class,
            ProgramSeeder::class,
            QuoteSeeder::class,
            SchoolInformationSeeder::class,
            SlidersSeeder::class,
            WhyUsSeeder::class,
            MessageSeeder::class,
        ]);
    }
}
