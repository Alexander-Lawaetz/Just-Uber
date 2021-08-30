<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Menu;
use App\Models\Restaurant;
use App\Models\Variant;
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
    }
}