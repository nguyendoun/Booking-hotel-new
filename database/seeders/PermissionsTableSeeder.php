<?php

namespace Database\Seeders;


use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [      
                'title' => 'user_management_access',
            ],
            [

                'title' => 'permission_create',
            ],
            [
                'title' => 'permission_edit',
            ],
            [

                'title' => 'permission_show',
            ],
            [
 
                'title' => 'permission_delete',
            ],
            [

                'title' => 'permission_access',
            ],
            [

                'title' => 'role_create',
            ],
            [

                'title' => 'role_edit',
            ],
            [

                'title' => 'role_show',
            ],
            [

                'title' => 'role_delete',
            ],
            [

                'title' => 'role_access',
            ],
            [

                'title' => 'user_create',
            ],
            [

                'title' => 'user_edit',
            ],
            [

                'title' => 'user_show',
            ],
            [

                'title' => 'user_delete',
            ],
            [

                'title' => 'user_access',
            ],
            [

                'title' => 'hotel_create',
            ],
            [

                'title' => 'hotel_edit',
            ],
            [

                'title' => 'hotel_show',
            ],
            [

                'title' => 'hotel_delete',
            ],
            [

                'title' => 'hotel_access',
            ],
            [

                'title' => 'room_type_create',
            ],
            [

                'title' => 'room_type_edit',
            ],
            [

                'title' => 'room_type_show',
            ],
            [

                'title' => 'room_type_delete',
            ],
            [

                'title' => 'room_type_access',
            ],
            [

                'title' => 'room_create',
            ],
            [

                'title' => 'room_edit',
            ],
            [

                'title' => 'room_show',
            ],
            [

                'title' => 'room_delete',
            ],
            [

                'title' => 'room_access',
            ],
            [

                'title' => 'booking_create',
            ],
            [

                'title' => 'booking_edit',
            ],
            [

                'title' => 'booking_show',
            ],
            [
                'title' => 'booking_delete',
            ],
            [
                'title' => 'booking_access',
            ],
            [

                'title' => 'coupon_create',
            ],
            [

                'title' => 'coupon_edit',
            ],
            [

                'title' => 'coupon_show',
            ],
            [
                'title' => 'coupon_delete',
            ],
            [
                'title' => 'coupon_access',
            ],
            [

                'title' => 'image_create',
            ],
            [

                'title' => 'image_edit',
            ],
            [

                'title' => 'image_show',
            ],
            [
                'title' => 'image_delete',
            ],
            [
                'title' => 'image_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
