<?php

use App\Http\Controllers\CategoryFilterController;
use App\Http\Controllers\RestaurantMenuController;
use App\Http\Controllers\RestaurantQueryController;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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
    // TODO Implement database queries
    $client = new Client(['base_uri' => config('app.url')]);

    // Initiate each request but do not block
    $promises = [
        'refines'   => $client->getAsync('filters/categories', [ 'query' => ['group' => 'refines', 'title' => 'filters']]),
        'cuisines'  => $client->getAsync('filters/categories', [ 'query' => ['group' => 'cuisines', 'title' => 'cuisines']]),
    ];

    // Wait for the requests to complete; throws a ConnectException
    // if any of the requests fail
    $responses = Promise\Utils::unwrap($promises);

    $cuisines   = json_decode($responses['cuisines']->getBody());
    $refines    = json_decode($responses['refines']->getBody());

    // TODO implement data of registration
    // TODO move filter logic into model
    $restaurants = [
        (object)[
            'name' => 'Crispy House Pizza',
            'reputation' => (object) [
                'ratings' => 429,
                'avg_stars' => 5.5,
            ],
            'main_dishes' => [
                'italian',
                'burger',
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
                'american',
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
                'sushi',
                'chinese',
            ],
            'details' => (object) [
                'opening_hours' => ['12:45:00', '19:30:00'],
                'take_away' => null,
            ],
        ],
    ];

    $cuisine_filter = $_GET['cuisines'] ?? [];
    $refine_filter  = $_GET['refines'] ?? [];

    /*if(!empty($cuisine_filter)) {
        print_r(array_filter($restaurants, function($restaurant) {
            $cuisine_filter = $_GET['cuisines'];
            $restaurant_dishes = $restaurant->main_dishes;

            return array_intersect($cuisine_filter, $restaurant_dishes) & 1;
        }));
    }
    die();*/

    if(!empty($cuisine_filter)) {
        $restaurants = array_filter($restaurants, function($restaurant) {
            $filters = $_GET['cuisines'];
            $restaurant_dishes = $restaurant->main_dishes;

            return array_intersect($filters, $restaurant_dishes) & 1;
        });
    }

    if(!empty($refine_filter)) {
        $restaurants = array_filter($restaurants, function($restaurant) {
            $filters = $_GET['refines'];
            $restaurant_dishes = $restaurant->main_dishes;

            if(in_array('five_star', $filters)) {
                return $restaurant->reputation->avg_stars > 4;
            }

            if(in_array('free_delivery', $filters)) {
                return !empty($restaurant->details->take_away) && $restaurant->details->take_away->deliver_fee <= 0;
            }

            // TODO add "new" refine filter logic
            // TODO add "open_now" refine filter logic

            if(in_array('pick_up', $filters)) {
                return empty($restaurant->details->take_away);
            }

            // TODO add "with_discount" refine filter logic

            return true;
        });
    }

    return view('restaurant-index', ['cuisines' => $cuisines, 'refines' => $refines, 'restaurants' => $restaurants, 'postcode' => $postcode]);
})->name('restaurants.filter');

Route::get( '/restaurants-{identifier}', [RestaurantMenuController::class, '__invoke']);

Route::get('/filters/categories', [CategoryFilterController::class, '__invoke']);

Route::post('/area/search-query', [RestaurantQueryController::class, '__invoke'])->name('restaurants.query');
