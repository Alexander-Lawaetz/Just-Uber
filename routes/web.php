<?php

use App\Http\Controllers\CategoryFilterController;
use App\Http\Controllers\RestaurantQueryController;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
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
    $client = new Client(['base_uri' => config('app.url')]);

    // Initiate each request but do not block
    $promises = [
        'refines' => $client->getAsync('filters/categories', [ 'query' => ['group' => 'refines', 'title' => 'filters']]),
        'cuisines' => $client->getAsync('filters/categories', [ 'query' => ['group' => 'cuisines', 'title' => 'cuisines']]),
    ];

    // Wait for the requests to complete; throws a ConnectException
    // if any of the requests fail
    $responses = Promise\Utils::unwrap($promises);

    $cuisines = json_decode($responses['cuisines']->getBody());
    $refines = json_decode($responses['refines']->getBody());

    $restaurants = [
        (object)[
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
        ],
        (object)[
            'name' => 'Bolbro Grill & Pizza',
            'reputation' => (object) [
                'ratings' => 1215,
                'avg_stars' => 5.2,
            ],
            'main_dishes' => [
                'italian',
                'American',
            ],
            'details' => (object) [
                'opening_hours' => ['12:00:00', '21:00:00'],
                'take_away' => (object) [
                    'min_order' => null,
                    'deliver_fee' => 29,
                    'currency_sign' => 'kr',
                ],
            ],
        ],
        (object)[
            'name' => 'Restaurant Workwik',
            'reputation' => (object) [
                'ratings' => 637,
                'avg_stars' => 4.0,
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

Route::get('/filters/categories', [CategoryFilterController::class, '__invoke']);

Route::post('/area/search-query', [RestaurantQueryController::class, '__invoke'])->name('restaurants.query');
