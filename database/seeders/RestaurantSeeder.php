<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryFilter;
use App\Models\Menu;
use App\Models\OpeningHour;
use App\Models\Restaurant;
use App\Models\Variant;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restaurant::factory()->count(50)
            ->has(Category::factory()->count(10)
                ->has(Menu::factory()->count(5)
                    ->has(Variant::factory()->count(3))))
            ->create();

        $restaurants = Restaurant::all();
        foreach ($restaurants as $restaurant) {
            $cuisines   = CategoryFilter::all()->where('group', '=', 'cuisines')->random(2);
            $refines    = CategoryFilter::all()->where('group', '=', 'refines')->random(2);
            $restaurant->categoryfilters()->attach($cuisines);
            $restaurant->categoryfilters()->attach($refines);

            for ($i = 0; $i < 7; $i++) {
                OpeningHour::factory()->state([
                    'restaurant_id' => $restaurant->getKey(),
                    'dayOfWeek' => $i,
                    'opens' => Carbon::createFromTime(rand(10, 15)),
                    'closes' => Carbon::createFromTime(rand(17, 23)),
                ])->create();
            }
        }
    }
}
