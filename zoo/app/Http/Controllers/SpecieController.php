<?php

namespace App\Http\Controllers;

use App\Models\Specie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecieController extends Controller
{
   
    public function index()
    {
        $species = Specie::all();

        return view('back.specie.index', [
            'species' => $species
        ]);
    }


    public function create()
    {
        return view('back.specie.create');
    }


    public function store(Request $request)
    {
        Specie::create([
            'type' => $request->type,
        ]);
        return redirect()
        ->route('species-index');
    }



    public function edit(Specie $specie)
    {
        return view('back.specie.edit', [
            'specie' => $specie
        ]);
    }


    public function update(Request $request, Specie $specie)
    {
        $specie->update([
            'type' => $request->type,
        ]);
        return redirect()->route('species-index');
    }


    public function destroy(Specie $specie)
    {
/*         if($cat->product->count()) {
            return 'Cannot be deleted';
            jei tures managery tada bus galima atkomentuoti jog negalima butu istrinti :)
        } */

        $specie->delete();
        return redirect()->route('species-index');
    }
}
