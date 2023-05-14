<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coupon;

class CouponTableSeeder extends Seeder
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
                'code'=>'KM01',
                'remain'=>'20',
                'reduction'=>'10',
                'startDate'=>'2021-12-12',
                'endDate'=>'2021-12-15',
            ],
            [
                'code'=>'KM02',
                'remain'=>'40',
                'reduction'=>'20',
                'startDate'=>'2021-12-10',
                'endDate'=>'2021-12-20',
            ],
        ];
        Coupon::insert($data);
    }
    
}
