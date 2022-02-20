<?php

namespace Database\Seeders;

use App\Models\Extracurricular;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExtracurricularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            Extracurricular::create([
                'name' => 'Extracurricular ' . $i,
                'image' => 'none',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, amet ut non quibusdam adipisci earum nulla velit? Suscipit soluta omnis quasi hic. Aliquid, magni quia eius hic quas dolores ipsa.'
            ]);
        }
    }
}
