<?php

namespace App\Http\Livewire\Restaurant;

use App\Models\CategoryFilter;
use Livewire\Component;

class Sidebar extends Component
{
    public $cuisines;
    public $cuisinesCollection;
    public $refines;
    public $refinesCollection;

    protected $queryString  = ['cuisines', 'refines'];
    protected $listeners    = ['updateFilters'];

    public function mount() {
        CategoryFilter::all()->mapToGroups(function ($item, $key) {
            return [$item['group'] => $item];
        })->each(function ($item, $key) {
            $this->{$key . 'Collection'} = $item;
        });
    }

    public function updateFilters(string $group, array $values) : void {
        $this->{$group} = $values;
    }

    public function render()
    {
        return view('livewire.restaurant.sidebar');
    }
}
