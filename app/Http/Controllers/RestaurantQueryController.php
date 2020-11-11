<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FindRestaurants extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data = $request->validate([
           'postcode' => 'required|digits:4'
        ]);

        return redirect()->route('restaurant-filter', ['code' => $data->postcode]);
    }
}
