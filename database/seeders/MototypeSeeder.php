<?php

namespace Database\Seeders;

use App\Models\Mototypes;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MototypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $motorcycleTypes = [
            'Underbone/Scooter',
            'Standard/Street',
            'Cruiser',
            'Adventure/Touring',
            'Sportbike',
            'Dual Sport',
            'Off-road/Trail',
            'Electric',
            'Moped',
            'Chopper',
        ];

        // Loop through the types and insert into the database
        foreach ($motorcycleTypes as $type) {
            Mototypes::create(['name' => $type]);
        }
    }
}
