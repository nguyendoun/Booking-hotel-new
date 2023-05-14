<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Img_nearloca;

class Img_NearlocateTable_Seeder extends Seeder
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
                
                'hotel_id'=>'1',
                
            ],
           
        ];
        Img_nearloca::insert($data);
    }
}
