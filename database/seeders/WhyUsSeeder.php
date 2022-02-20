<?php

namespace Database\Seeders;

use App\Models\WhyUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WhyUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WhyUs::create([
            'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, amet ut non quibusdam adipisci earum nulla velit? Suscipit soluta omnis quasi hic. Aliquid, magni quia eius hic quas dolores ipsa.',
            'image' => 'none'
        ]);
    }
}
