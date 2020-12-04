<?php

namespace App\View\Components\SortingFilter;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Filter extends Component
{
    public array $list;
    private string $group;

    /**
     * Create a new component instance.
     *
     * @param array $list
     * @param string $group
     */
    public function __construct(array $list, string $group)
    {
        $this->list = $list;
        $this->group = $group;
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
        return view('components.sorting-filter.filter');
    }
}
