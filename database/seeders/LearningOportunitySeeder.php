<?php

namespace Database\Seeders;

use App\Models\LearningOportunity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LearningOportunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 3; $i++) { 
            LearningOportunity::create([
                'title' => 'Learning Oportunity ' .$i,
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, amet ut non quibusdam adipisci earum nulla velit? Suscipit soluta omnis quasi hic. Aliquid, magni quia eius hic quas dolores ipsa.',
                'icon' => 'none',
            ]);
        }
    }
}
