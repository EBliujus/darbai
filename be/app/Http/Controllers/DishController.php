<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Menu;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DishController extends Controller
{

    public function index()
    {
        $dishes = Dish::all();

        return view('back.dish.index', [
            'dishes' => $dishes
        ]);
    }

    public function create()
    {
        $restaurants = Restaurant::all();
        $menus = Menu::all();

        return view('back.dish.create');
    }


    public function store(Request $request)
    {

    }
    


    public function show(Dish $dish)
    {
        //
    }


    public function edit(Dish $dish)
    {
        //
    }


    public function update(Request $request, Dish $dish)
    {
        //
    }


    public function destroy(Dish $dish)
    {
        //
    }
}
