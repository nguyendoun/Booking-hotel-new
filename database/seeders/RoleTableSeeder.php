<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
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
                'title'=>'Admin',
                'description' => 'Quản lý hệ thống',
            ],
            [
                'title'=>'Hotel',
                'description' =>'Cho thuê phòng',
            ],
            [
                'title'=>'Khách hàng',
                'description' =>'Đặt phòng',
            ],
        ];
        Role::insert($data);
    }
}
