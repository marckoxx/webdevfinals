<?php

namespace Database\Seeders;

use App\Models\Brands;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brandNames = [
            'Honda',
            'Kawasaki',
            'Suzuki',
            'Vespa',
            'Yamaha',
        ];

        // Loop through the brand names and insert into the database
        foreach ($brandNames as $name) {
            Brands::create(['name' => $name]);
        }
    }
}
