<?php

namespace App\Http\Livewire\Restaurant;

use Livewire\Component;

class RefineFilter extends Component
{
    public $refines = [];
    public $collection;
    public $showMore = false;

    protected $queryString = ['refines'];

    public function mount($collection) {
        $this->collection = $collection;
    }

    public function updatedRefines() {
        $this->emit('filterUpdate', array_fill_keys(['refines'], array_values($this->refines)));
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
        return view('livewire.restaurant.refine-filter');
    }
}
