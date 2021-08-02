<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryFilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_filters')->insert(array(
           array(
               'description'    => 'american',
               'value'          => 'american',
               'group'          => 'cuisines',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
           ),
            array(
                'description'    => 'danish',
                'value'          => 'danish',
                'group'          => 'cuisines',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            array(
                'description'    => 'café',
                'value'          => 'cafe',
                'group'          => 'cuisines',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            array(
                'description'    => 'arabic',
                'value'          => 'arabic',
                'group'          => 'cuisines',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            array(
                'description'    => 'indian',
                'value'          => 'indian',
                'group'          => 'cuisines',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            array(
                'description'    => 'japanese',
                'value'          => 'japanese',
                'group'          => 'cuisines',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            array(
                'description'    => 'chicken',
                'value'          => 'chicken',
                'group'          => 'cuisines',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            array(
                'description'    => 'chinese',
                'value'          => 'chinese',
                'group'          => 'cuisines',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            array(
                'description'    => 'sushi',
                'value'          => 'sushi',
                'group'          => 'cuisines',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            array(
                'description'    => 'burger',
                'value'          => 'burger',
                'group'          => 'cuisines',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            array(
                'description'    => 'afghan',
                'value'          => 'afghan',
                'group'          => 'cuisines',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            array(
                'description'    => 'greek',
                'value'          => 'greek',
                'group'          => 'cuisines',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            array(
                'description'    => 'kebab',
                'value'          => 'kebab',
                'group'          => 'cuisines',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            array(
                'description'    => 'mexican',
                'value'          => 'mexican',
                'group'          => 'cuisines',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            array(
                'description'    => 'special offers',
                'value'          => 'with_discount',
                'group'          => 'refines',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            array(
                'description'    => 'free delivery',
                'value'          => 'free_delivery',
                'group'          => 'refines',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            array(
                'description'    => '5+ stars',
                'value'          => 'five_star',
                'group'          => 'refines',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            array(
                'description'    => 'open now',
                'value'          => 'open_now',
                'group'          => 'refines',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),

            array(
                'description'    => 'pick up',
                'value'          => 'pick_up',
                'group'          => 'refines',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            array(
                'description'    => 'new',
                'value'          => 'new',
                'group'          => 'refines',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
        ));
    }
}
