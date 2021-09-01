<?php

namespace Database\Factories;

use App\Models\OpeningHour;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

class OpeningHourFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OpeningHour::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'restaurant_id' => Restaurant::all()->random(),
            'closes'        => $this->faker->time('H:M'),
            'opens'         => $this->faker->time('H:M'),
            'dayOfWeek'     => rand(0, 7),
            'validFrom'     => $this->faker->dateTimeThisMonth(),
            'validThrough'  => $this->faker->dateTimeThisYear(),
        ];
    }
}
