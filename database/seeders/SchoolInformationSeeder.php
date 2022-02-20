<?php

namespace Database\Seeders;

use App\Models\SchoolInformation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SchoolInformation::create([
            'name' => 'School Profile',
            'title' => 'The Best School In The Province',
            'vission' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, amet ut non quibusdam adipisci earum nulla velit? Suscipit soluta omnis quasi hic. Aliquid, magni quia eius hic quas dolores ipsa.',
            'mission' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, amet ut non quibusdam adipisci earum nulla velit? Suscipit soluta omnis quasi hic. Aliquid, magni quia eius hic quas dolores ipsa.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, amet ut non quibusdam adipisci earum nulla velit? Suscipit soluta omnis quasi hic. Aliquid, magni quia eius hic quas dolores ipsa.',
            'logo' => 'none',
            'instagram' => 'https://instagram.com',
            'twitter' => 'https://twitter.com',
            'facebook' => 'https://facebook.com',
            'fax' => '(2312) 123 1233 123',
            'address' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, amet ut non quibusdam adipisci earum nulla velit? Suscipit',
        ]);
    }
}
