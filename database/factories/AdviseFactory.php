<?php

namespace Database\Factories;

use App\Models\Advise;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Advise::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email'=>$this ->faker->email(),
            'phone'=>$this->faker->phoneNumber(),
            'note'=>$this->faker->text(),
            'type_customer'=>'cá nhân',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
