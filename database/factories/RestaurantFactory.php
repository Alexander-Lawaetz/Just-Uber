<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Restaurant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'          => $this->faker->name(),
            'description'   => $this->faker->text(80),
            'phone_number'  => $this->faker->unique()->phoneNumber,
            'email'         => $this->faker->unique()->safeEmail,
            'street'        => $this->faker->streetAddress,
            'address_id'    => Address::all()->random(),
        ];
    }
}
