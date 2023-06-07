<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use App\Models\Specie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ManagerController extends Controller
{

    public function index()
    {
        $managers = Manager::all();

        return view('back.manager.index', [
            'managers' => $managers
        ]);
    }


    public function create()
    {
        $species = Specie::all();

        return view('back.manager.create', [
            'species' => $species
        ]);
    }


    public function store(Request $request)
    {
        $manager = new Manager;
        $manager->name = $request->name;
        $manager->surname = $request->surname;
        $manager->specie_id = $request->specie_id;
        $manager->save();
        return redirect()->route('managers-index');
    }


    public function show(Manager $manager)
    {
        //
    }


    public function edit(Manager $manager)
    {
        //
    }

    public function update(Request $request, Manager $manager)
    {
        //
    }


    public function destroy(Manager $manager)
    {
        //
    }
}
