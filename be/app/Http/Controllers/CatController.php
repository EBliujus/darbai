<?php

namespace App\Http\Controllers;

use App\Models\cat;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorecatRequest;
use App\Http\Requests\UpdatecatRequest;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(cat $cat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cat $cat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecatRequest $request, cat $cat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cat $cat)
    {
        //
    }
}
