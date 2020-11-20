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

Route::get('/area/{postcode}', function () {
    $cuisines = (object) [
        'title' => 'cuisines',
        'group' => 'cuisines',
        'data' => [['identifier' => 'american'], ['identifier' => 'danish']]
    ];
    $refines = (object) [
        'title' => 'filters',
        'group' => 'refines',
        'data' => [
            ['identifier' => 'special offers'],
            ['identifier' => 'free delivery'],
            ['identifier' => '5+ stars'],
            ['identifier' => 'open now'],
            ['identifier' => 'pick up'],
            ['identifier' => 'new'],
        ],
    ];
    return view('restaurant-index', ['cuisines' => $cuisines], ['refines' => $refines]);
})->name('restaurants.filter');

Route::post('/area/search-query' , [RestaurantQueryController::class, '__invoke'])->name('restaurants.query');
