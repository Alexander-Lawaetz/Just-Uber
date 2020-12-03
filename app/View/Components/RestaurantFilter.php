<?php

namespace App\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class RestaurantFilter extends Component
{

    public array $list;

    private string $uuid;

    public string $group;

    public string $title;

    /**
     * Create a new component instance.
     *
     * @param array|empty $list
     * @param string $title
     * @param string $group
     */
    public function __construct(array $list = [], string $title, string $group)
    {
        $this->list = $list;
        $this->group = $group;
        $this->title = $title;
        $this->generateUUID();
    }

    private function generateUUID() : void {
        $id = Str::uuid();
        $this->uuid = Str::of($this->group)->append(':', $id);
    }

    public function getUUID() : string {
        return $this->uuid;
    }

    public function explodeUUID() : string {
        return Str::of($this->uuid)->explode(':')[1];
    }

    public function checked(string $group, string $value) : bool {
        return isset($_GET[$group]) && strpos(implode(',', $_GET[$group]), $value) !== false;
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
