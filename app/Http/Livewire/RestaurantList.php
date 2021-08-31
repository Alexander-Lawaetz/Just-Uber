<?php

namespace App\Http\Livewire;

use App\Models\Restaurant;
use Livewire\Component;

class RestaurantList extends Component
{
    public $restaurants;
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
        if (!empty($this->cuisines)) {
            return Restaurant::whereHas('categoryfilters', function ($query) {
                $query->whereIn('value', $this->cuisines);
            })->with('address')->get();
        } else {
            return Restaurant::with(['categoryfilters', 'address'])->get();
        }
    }

    public function render()
    {
        return view('livewire.restaurant-list');
    }
}
