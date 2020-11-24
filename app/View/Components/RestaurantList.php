<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RestaurantList extends Component
{
    public array $restaurants;

    /**
     * Create a new component instance.
     *
     * @param array $restaurants
     */
    public function __construct(array $restaurants = [])
    {

        $this->restaurants = $restaurants;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.restaurant-list');
    }
}
