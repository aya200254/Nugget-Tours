<?php

namespace Database\Seeders;
use App\Models\Flight;  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Flight::create([
            'departure_city' => 'New York',
            'arrival_city' => 'Los Angeles',
            'departure_date' => '2024-09-25',
            'price' => 150.00,
        ]);

        Flight::create([
            'departure_city' => 'San Francisco',
            'arrival_city' => 'Miami',
            'departure_date' => '2024-09-26',
            'price' => 200.00,
        ]);

        Flight::create([
            'departure_city' => 'Chicago',
            'arrival_city' => 'Dallas',
            'departure_date' => '2024-09-27',
            'price' => 120.00,
        ]);
    }
}
