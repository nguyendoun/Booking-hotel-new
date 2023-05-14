<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;
class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'price'=>'600000',
                'status'=>'0',
                'room_number'=>'1',
                'description'=>'null',
                'qty' => 10,
                'discount' => 10,
                'area' => 30,
                'view' => 'Nhìn ra biển',
                'hotel_id'=>'1',
                'roomtype_id'=>'1',
                'service'=> 'Bữa sáng miễn phí'
            ],
            [
                'price'=>'800000',
                'status'=>'0',
                'room_number'=>'1',
                'description'=>'null',
                'qty' => 12,
                'discount' => 10,
                'area' => 35,
                'view' => 'Nhìn ra biển',
                'hotel_id'=>'1',
                'roomtype_id'=>'2',
                'service'=> 'Bữa sáng miễn phí'
            ],
            [
                'price'=>'1100000',
                'status'=>'0',
                'room_number'=>'1',
                'description'=>'null',
                'qty' => 10,
                'discount' => 10,
                'area' => 25,
                'view' => 'Nhìn ra biển',
                'hotel_id'=>'2',
                'roomtype_id'=>'3',
                'service'=> 'Bữa sáng miễn phí'
            ],
            [
                'price'=>'1500000',
                'status'=>'0',
                'room_number'=>'1',
                'description'=>'null',
                'qty' => 10,
                'discount' => 10,
                'area' => 30,
                'view' => 'Nhìn ra biển',
                'hotel_id'=>'5',
                'roomtype_id'=>'5',
                'service'=> 'Bữa sáng miễn phí'
            ],
            [
                'price'=>'250000',
                'status'=>'1',
                'room_number'=>'4',
                'description'=>'null',
                'qty' => 10,
                'discount' => 12,
                'area' => 25,
                'view' => 'Hướng ra biển',
                'hotel_id'=>'2',
                'roomtype_id'=>'1',
                'service'=> 'Miễn phí hoàn hủy'
            ],
            [
                'price'=>'450000',
                'status'=>'1',
                'room_number'=>'4',
                'description'=>'null',
                'qty' => 10,
                'discount' => 12,
                'area' => 25,
                'view' => 'Hướng ra biển',
                'hotel_id'=>'2',
                'roomtype_id'=>'3',
                'service'=> 'Bữa sáng miễn phí'
            ],
            [
                'price'=>'450000',
                'status'=>'1',
                'room_number'=>'10',
                'description'=>'null',
                'qty' => 10,
                'discount' => 12,
                'area' => 25,
                'view' => 'Hướng ra biển',
                'hotel_id'=>'3',
                'roomtype_id'=>'2',
                'service'=> 'Bữa sáng miễn phí'
            ],
            [
                'price'=>'430000',
                'status'=>'1',
                'room_number'=>'4',
                'description'=>'null',
                'qty' => 10,
                'discount' => 12,
                'area' => 40,
                'view' => 'Hướng ra biển',
                'hotel_id'=>'4',
                'roomtype_id'=>'3',
                'service'=> 'Bữa sáng miễn phí'
            ],



            



            
        ];
        Room::insert($data);
    }
}
