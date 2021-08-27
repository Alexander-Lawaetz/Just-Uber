<?php

namespace App\Http\Livewire\Restaurant;

use App\Models\CategoryFilter;
use Livewire\Component;

class Sidebar extends Component
{
    public $cuisines;
    public $refines;

    public function mount() {
        $this->cuisines = CategoryFilter::all()->where('group', 'cuisines');
        $this->refines = CategoryFilter::all()->where('group', 'refines');
    }

    public function render()
    {
        return view('livewire.restaurant.sidebar');
    }
}
