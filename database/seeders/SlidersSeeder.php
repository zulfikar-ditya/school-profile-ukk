<?php

namespace Database\Seeders;

use App\Models\Sliders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 3; $i++) {
            Sliders::create([
                'main_text' => 'Slider ' . $i,
                'sub_text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, amet ut non quibusdam adipisci earum nulla velit? Suscipit soluta omnis quasi hic. Aliquid, magni quia eius hic quas dolores ipsa.',
                'image' => 'none'
            ]);
        }
    }
}
