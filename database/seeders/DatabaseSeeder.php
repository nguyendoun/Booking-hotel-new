<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
            $this->call([
            PermissionsTableSeeder::class,
            RoleTableSeeder::class,
            RolePermissionTableSeeder::class,
            UserTableSeeder::class,
            RoleUserTableSeeder::class,
            CouponTableSeeder::class,
            CategoryTableSeeder::class,
            CityTableSeeder::class,
            HotelTableSeeder::class,
            RoomTypeTableSeeder::class,
            RoomTableSeeder::class,
            ImageTableSeeder::class,
        ]);
    }
}
