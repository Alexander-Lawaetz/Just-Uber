<?php

namespace App\Http\Livewire\Restaurant;

use Livewire\Component;

class SidebarFilter extends Component
{
    public $query;
    public $collection;
    public $group;
    public $showMore = false;

    public function mount($collection) {
        $this->collection = $collection;
        $this->group = $this->collection[0]->group;
        $this->query = $_GET[$this->group] ?? [];
    }

    public function isChecked($value) : bool {
        return in_array($value, $this->query);
    }

    public function updatedQuery($value) {
        $this->emitUp('updateFilters', $this->group, $this->query);
        $this->emit('filterUpdate', array_fill_keys([$this->group], array_values($this->query)));
    }

    public function expand() {
        $this->showMore = !$this->showMore;
    }

    public function render()
    {
        return view('livewire.restaurant.sidebar-filter');
    }
}
