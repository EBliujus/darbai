<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class RestaurantController extends Controller
{

    public function index()
    {
        $restaurants = Restaurant::all();

        return view('back.restaurant.index', [
            'restaurants' => $restaurants
        ]);
    }


    public function create()
    {
        return view('back.restaurant.create');
    }


    public function store(Request $request)
    {
        Restaurant::create([
            'name' => $request->name,
            'code' => $request->code,
            'address' => $request->address
        ]);
        return redirect()
        ->route('restaurants-index');
    }

    public function edit(Restaurant $restaurant)
    {
        return view('back.restaurant.edit', [
            'restaurant' => $restaurant
        ]);
    }


    public function update(Request $request, Restaurant $restaurant)
    {
        $restaurant->update([
            'name' => $request->name,
            'code' => $request->code,
            'address' => $request->address
        ]);
        return redirect()->route('restaurants-index');
    }


    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        return redirect()->route('restaurants-index');
    }
}
