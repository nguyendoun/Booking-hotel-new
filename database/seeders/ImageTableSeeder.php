<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;

class ImageTableSeeder extends Seeder
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
                'path'=>'1.jpg',
                'room_id'=>'1',
            ],
            [
                'path'=>'1.1.jpg',
                'room_id'=>'1',
            ],
            [
                'path'=>'1.2.jpg',
                'room_id'=>'1',
            ],
            [
                'path'=>'2.jpg',
                'room_id'=>'2',
            ],
            [
                'path'=>'1.3.jpg',
                'room_id'=>'2',
            ],
            [
                'path'=>'1.4.jpg',
                'room_id'=>'2',
            ],
            [
                'path'=>'3.jpg',
                'room_id'=>'3',
            ],
            [
                'path'=>'1.1.jpg',
                'room_id'=>'3',
            ],
            [
                'path'=>'1.3.jpg',
                'room_id'=>'3',
            ],
            [
                'path'=>'4.jpg',
                'room_id'=>'4',
            ],
            [
                'path'=>'1.2.jpg',
                'room_id'=>'4',
            ],
            [
                'path'=>'1.4.jpg',
                'room_id'=>'4',
            ],
            [
                'path'=>'5.jpg',
                'room_id'=>'5',
            ],
            [
                'path'=>'8.jpg',
                'room_id'=>'5',
            ],
            [
                'path'=>'1.2.jpg',
                'room_id'=>'5',
            ],
            [
                'path'=>'6.jpg',
                'room_id'=>'6',
            ],
            [
                'path'=>'1.1.jpg',
                'room_id'=>'6',
            ],
            [
                'path'=>'1.4.jpg',
                'room_id'=>'6',
            ],
            [
                'path'=>'7.jpg',
                'room_id'=>'7',
            ],
            [
                'path'=>'1.3.jpg',
                'room_id'=>'7',
            ],
            [
                'path'=>'1.jpg',
                'room_id'=>'7',
            ],
            [
                'path'=>'8.jpg',
                'room_id'=>'8',
            ],
            [
                'path'=>'1.3.jpg',
                'room_id'=>'8',
            ],
            [
                'path'=>'3.jpg',
                'room_id'=>'8',
            ],
        ];
        Image::insert($data);
    }
}
