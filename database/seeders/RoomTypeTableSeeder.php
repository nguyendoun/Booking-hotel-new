<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoomType;

class RoomTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['type'=>'Standard (STD)', 'bed' => '2', 'size'=>'đơn', 'capactity' => '2'],
            ['type'=>'Superior (SUP)', 'bed' => '2', 'size'=>'đơn',  'capactity' => '2'],
            ['type'=>'Deluxe (DLX)', 'bed' => '2',  'size'=>'king','capactity' => '3'],
            ['type'=>'Suite (SUT)', 'bed' => '2', 'size'=>'queen', 'capactity' => '4'],
            ['type'=>'Connecting room','bed' => '4','size'=>'queen','size'=>'đơn',  'capactity' => '8'],
        ];
        RoomType::insert($data);
    }
}
