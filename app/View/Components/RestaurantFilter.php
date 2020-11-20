<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RestaurantFilter extends Component
{
    /**
     *
     *
     * @var array
     */
    public array $list;

    /**
     * @var bool
     */
    public bool $showAll;

    public string $title;

    public string $group;

    /**
     * Create a new component instance.
     *
     * @param string $title
     * @param string $group
     * @param array|empty $list
     * @param bool $showAll
     */
    public function __construct(string $title, string $group, array $list = [], bool $showAll = false)
    {
        $this->list = $list;
        $this->showAll = $showAll;
        $this->title = $title;
        $this->group = $group;
    }

    public function toggleShowAll() : void {
        $this->showAll = !$this->showAll;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.restaurant-filter');
    }
}
