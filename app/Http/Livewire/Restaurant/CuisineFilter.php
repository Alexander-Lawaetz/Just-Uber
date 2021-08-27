<?php

namespace App\Http\Livewire\Restaurant;

use Livewire\Component;

class CuisineFilter extends Component
{
    public $cuisines = [];
    public $collection;
    public $showMore = false;

    protected $queryString = ['cuisines'];

    public function mount($collection) {
        $this->collection = $collection;
    }

    public function updatedCuisines() {
        $this->emit('filterUpdate', array_fill_keys(['cuisines'], array_values($this->cuisines)));
    }

    public function checked($value) {
        $group = $this->collection[1]->group;
        return isset($_GET[$group]) && in_array($value, $_GET[$group]) !== false;
    }

    public function expand() {
        $this->showMore = !$this->showMore;
    }

    public function render()
    {
        return view('livewire.restaurant.cuisine-filter');
    }
}
