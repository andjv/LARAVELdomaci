<?php

namespace Database\Seeders;

use App\Models\Brend;
use Illuminate\Database\Seeder;

class BrendTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brend::create([
            'brend' => 'The Ordinary'
        ]);

        Brend::create([
            'brend' => 'Vichy'
        ]);

        Brend::create([
            'brend' => 'LANEIGE'
        ]);

        Brend::create([
            'brend' => 'Skinfood'
        ]);

        Brend::create([
            'brend' => 'Sunkissed'
        ]);

        Brend::create([
            'brend' => 'Frudia'
        ]);

        Brend::create([
            'brend' => 'NEOGEN'
        ]);


    }
}
