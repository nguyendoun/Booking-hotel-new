<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['category'=>'Khách sạn nghỉ dưỡng'],
            ['category'=>'Khách sạn thương mại'],  
        ];
        Category::insert($data);
    }
}
