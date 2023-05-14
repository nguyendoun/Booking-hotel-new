<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BookingRoom;

class BookingRoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookingRoom::factory()->count(15)->create();
    }
}
