<?php

namespace App\Http\Controllers;

use App\Models\CategoryFilter;
use Illuminate\Http\Request;

class CategoryFilterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return array[]
     */
    public function __invoke(Request $request)
    {
        $group = $request->query('group');
        $title = $request->query('title');

        $category_filters = CategoryFilter::where('group', $group)
            ->orderBy('description', 'asc')
            ->get();

        return [
            'title' => $title,
            'group' => $group,
            'data'  => $category_filters,
        ];
    }
}
