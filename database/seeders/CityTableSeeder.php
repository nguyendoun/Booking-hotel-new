<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['city'=>'Hà Nội', 'img'=>'HN.jpg'],
            ['city'=>'Quảng Bình', 'img'=>'QB.png'],
            ['city'=>'Quảng Trị', 'img'=>'QT.jpg'],
            ['city'=>'Đà Nẵng', 'img'=>'ĐN.jpg'],           
            ['city'=>'Huế', 'img'=>'Hue.jpg'],            
            ['city'=>'Quảng Nam', 'img'=>'QNam.jpg'],           
            ['city'=>'Bình Định ', 'img'=>'BDinh.jpg'],           
            ['city'=>'Hồ Chí Minh', 'img'=>'TPHCM.jpg'],
        ];
        City::insert($data);
    }
}
