<?php

namespace Database\Factories;

use App\Models\BookingRoom;
use App\Models\Booking;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingRoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BookingRoom::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $booking = Booking::pluck('id');
        $room = Room::pluck('id');

            return [
                    'booking_id'=>$this->faker->randomElement($booking),
                    'room_id'=>$this->faker->randomElement($room),
                    'qty'=>rand(1,5),
                    'subtotal'=>rand(1,100),
                    'startDate'=> now(),
                    'endDate'=> '2021-11-12',
                    'num_days'=> '4',
                    'reduction'=>rand(1,100),
                    'total'=>rand(100000,500000),
                    'note'=>$this->faker->text(),
                    'created_at' => now(),
                    'updated_at' => now(),
            ];
    }
}
