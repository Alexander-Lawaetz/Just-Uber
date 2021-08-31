<?php

namespace Database\Factories;

use App\Models\Restaurant;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'restaurant_id'     => Restaurant::all()->random(),
            'food_review'       => rand(0, 5),
            'delivery_review'   => rand(0, 5),
            'delivery_time'     => $this->faker->dateTime,
            'author'            => $this->faker->randomElement(['anonymous', $this->faker->name]),
            'comments'          => $this->faker->text(200),
        ];
    }
}
