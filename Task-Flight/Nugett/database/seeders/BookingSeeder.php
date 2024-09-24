<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;
use App\Models\Flight;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $flight1 = Flight::first(); 
        $flight2 = Flight::find(2);  

   
        Booking::create([
            'flight_id' => $flight1->id,
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '1234567890',
        ]);

        Booking::create([
            'flight_id' => $flight2->id,
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'phone' => '0987654321',
        ]);
    }
}
