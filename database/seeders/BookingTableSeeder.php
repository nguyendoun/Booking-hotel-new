<?php

namespace Database\Seeders;
use App\Models\Booking;
use Illuminate\Database\Seeder;

class BookingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Booking::factory()->count(5)->create();
       
    }
    
}
