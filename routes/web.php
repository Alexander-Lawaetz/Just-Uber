<?php

use App\Http\Controllers\RestaurantQueryController;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $oldPostcode = Cookie::get('postcode');

    return view('front-page', ['postcode' => $oldPostcode]);
});

Route::get('/area/{postcode}', function ($postcode) {
// TODO Implenent database queries
    $cuisines = (object) [
        'title' => 'cuisines',
        'group' => 'cuisines',
        'data' => [
            ['description' => 'american', 'value' => 'american'],
            ['description' => 'danish', 'value' => 'danish'],
            ['description' => 'cafe', 'value' => 'cafe'],
            ['description' => 'cafe', 'value' => 'cafe'],
            ['description' => 'cafe', 'value' => 'cafe'],
            ['description' => 'cafe', 'value' => 'cafe'],
            ['description' => 'cafe', 'value' => 'cafe'],
            ['description' => 'cafe', 'value' => 'cafe'],
            ['description' => 'cafe', 'value' => 'cafe'],
            ['description' => 'cafe', 'value' => 'cafe'],
            ['description' => 'cafe', 'value' => 'cafe'],
            ['description' => 'cafe', 'value' => 'cafe'],
            ['description' => 'danish', 'value' => 'danish'],

        ]
    ];
    $refines = (object) [
        'title' => 'filters',
        'group' => 'refines',
        'data' => [
            ['description' => 'special offers', 'value' => 'with_discount'],
            ['description' => 'free delivery', 'value' => 'free_delivery'],
            ['description' => '5+ stars', 'value' => 'five_star'],
            ['description' => 'open now', 'value' => 'open_now'],
            ['description' => 'pick up', 'value' => 'pick_up'],
            ['description' => 'new', 'value' => 'new'],
        ],
    ];
    $restaurants = [
        (object)[
            'name' => 'Pizza Crosa',
            'reputation' => (object) [
                'ratings' => 12,
                'stars' => 4.2,
            ],
            'main_dishes' => [
                'Italian',
                'Pizza',
            ],
            'details' => (object) [
                'opening_hours' => ['09:30:00', '21:00:00'],
                'take_away' => (object) [
                    'min_order' => 100,
                    'deliver_fee' => 25,
                    'currency' => 'dkk',
                ],
            ],
        ],
        (object)[
            'name' => 'Café Victoria',
            'reputation' => (object) [
                'ratings' => 88,
                'stars' => 4.0,
            ],
            'main_dishes' => [
                'Danish',
                'Premium & Gourmet',
            ],
            'details' => (object) [
                'opening_hours' => ['08:30:00', '17:00:00'],
                'take_away' => (object) [
                    'min_order' => null,
                    'deliver_fee' => 79,
                    'currency' => 'dkk',
                ],
            ],
        ],
        (object)[
            'name' => 'Restaurant Workwik',
            'reputation' => (object) [
                'ratings' => 637,
                'stars' => 4.0,
            ],
            'main_dishes' => [
                'Sushi',
                'Chinese',
            ],
            'details' => (object) [
                'opening_hours' => ['12:45:00', '19:30:00'],
                'take_away' => null,
            ],
        ],
    ];

    return view('restaurant-index', ['cuisines' => $cuisines, 'refines' => $refines, 'restaurants' => $restaurants, 'postcode' => $postcode]);
})->name('restaurants.filter');

Route::post('/area/search-query' , [RestaurantQueryController::class, '__invoke'])->name('restaurants.query');
