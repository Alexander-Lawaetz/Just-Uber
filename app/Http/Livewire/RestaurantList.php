<?php

namespace App\Http\Livewire;

use App\Models\Restaurant;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class RestaurantList extends Component
{
    public $restaurants = [];
    public $postcode;
    public $cuisines = [];
    public $refines = [];

    protected $listeners = ['filterUpdate'];

    public function mount($postcode) {
        foreach (request()->only(['cuisines', 'refines']) as $key => $value) {
            $this->$key = $value;
        }

        $this->postcode = $postcode;

        $this->restaurants = $this->filterRestaurants();
    }

    public function filterUpdate($filters) {
        $key = array_keys($filters)[0];
        $this->$key = $filters[$key];

        $this->restaurants = $this->filterRestaurants();
    }

    public function filterRestaurants() {
        $query = Restaurant::query();

        $query->when(!empty($this->cuisines), function ($query) {
            return $query->whereHas('categoryfilters', function ($query) {
                $query->whereIn('value', $this->cuisines);
            });
        });

        $query->when(empty($this->cuisines), function ($query) {
            return $query->with('categoryfilters');
        });

        $query->with(['address', 'reviews' => function ($query) {
                    $query->select(['*', DB::raw('(food_review + delivery_review) / 2 as avg_review')]);
                }])
                ->withCount('reviews');

        return $query->get();
    }

    public function render()
    {
        return view('livewire.restaurant-list');
    }
}
