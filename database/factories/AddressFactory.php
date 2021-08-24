<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'city'          => $this->faker->city,
            'state'         => $this->faker->state,
            'postal_code'   => $this->faker->postcode,
            'country'       => $this->faker->country,
        ];
    }
}
