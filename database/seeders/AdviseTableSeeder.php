<?php

namespace Database\Seeders;
use App\Models\Advise;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Advise::factory()->count(5)->create();
    }
}
