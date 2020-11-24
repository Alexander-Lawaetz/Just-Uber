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

// TODO Implenent database queries
Route::get('/area/{postcode}', function ($postcode) {
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
    return view('restaurant-index', ['cuisines' => $cuisines, 'refines' => $refines, 'postcode' => $postcode]);
})->name('restaurants.filter');

Route::post('/area/search-query' , [RestaurantQueryController::class, '__invoke'])->name('restaurants.query');
