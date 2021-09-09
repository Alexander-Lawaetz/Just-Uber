<?php

use App\Http\Controllers\RestaurantMenuController;
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
*/;

Route::get('/', function () {
    $oldPostcode = Cookie::get('postcode');

    return view('front-page', ['postcode' => $oldPostcode]);
});

Route::get('/area/{postcode}', function ($postcode) {
    return view('restaurant-index', ['postcode' => $postcode]);
})->name('restaurants.filter');

Route::get( '/restaurants-{identifier}', [RestaurantMenuController::class, '__invoke']);

Route::post('/area/search-query', [RestaurantQueryController::class, '__invoke'])->name('restaurants.query');
