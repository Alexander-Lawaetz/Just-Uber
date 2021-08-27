<?php

namespace App\Http\Livewire;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Builder;
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
        $this->restaurants = Restaurant::with(['categories.menus.variants', 'address'])->get();
    }

    public function filterUpdate($filters) {
        $key = array_keys($filters)[0];
        $this->$key = $filters[$key];
        $this->restaurants = Restaurant::with(['categories.menus.variants', 'address'])->where('name', 'Maddison Keeling DVM')->get();
    }

    public function render()
    {
        return view('livewire.restaurant-list');
    }
}
