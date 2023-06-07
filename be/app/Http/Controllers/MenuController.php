<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MenuController extends Controller
{

    public function index()
    {
        $menius = Menu::all();

        return view('back.menu.index', [
            'menius' => $menius
        ]);
    }


    public function create()
    {
        $restaurants = Restaurant::all();

        return view('back.menu.create', [
            'restaurants' => $restaurants
        ]);
    }


    public function store(Request $request)
    {
        $meniu = new Menu;
        $meniu->title = $request->title;
        $meniu->restaurant_id = $request->restaurant_id;
        $meniu->save();

        return redirect()->route('menius-index');
    }


    public function edit(Menu $menu)
    {
        $restaurants = Restaurant::all();

        return view('back.menu.edit', [
            'meniu' => $meniu,
            'restaurants' => $restaurants
        ]);
    }


    public function update(Request $request, Menu $menu)
    {
        $meniu->title = $request->title;
        $meniu->restaurant_id = $request->restaurant_id;
        $meniu->save();

        return redirect()->route('products-index');
    }


    public function destroy(Menu $menu)
    {
        $meniu->delete();
        return redirect()->route('menius-index');
    }
}
