<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantMenuController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param $identifier
     * @return \Illuminate\Http\Response
     */
    public function __invoke($identifier)
    {
        $restaurant = (object)[
            'name' => 'Crispy House Pizza',
            'reputation' => (object) [
                'ratings' => 429,
                'avg_stars' => 5.5,
            ],
            'main_dishes' => [
                'Italian',
                'Burger',
            ],
            'details' => (object) [
                'opening_hours' => ['11:30:00', '21:00:00'],
                'take_away' => (object) [
                    'min_order' => 80,
                    'deliver_fee' => 29,
                    'currency_sign' => 'kr',
                ],
            ],
        ];

        return view('restaurant-menu', ['restaurant' => $restaurant]);
    }
}
