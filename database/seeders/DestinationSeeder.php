<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    public function run(): void
    {
        $destinations = [
            'Europe',
            'North & South America',
            'Oceania',
            'Africa',
            'Middle East',
            'Asia',
        ];

        foreach ($destinations as $name) {
            Destination::create(['name' => $name]);
        }
    }
}

