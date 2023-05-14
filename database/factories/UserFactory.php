<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

                return [
                    'name'=>$this->faker->name(),
                    'email'=>$this ->faker->email(),
                    'address'=>$this ->faker->address(),
                    'phone'=>$this->faker->phoneNumber(),
                    'image'=> null,
                    'password'=>Bcrypt('1234567890'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
