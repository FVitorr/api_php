<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Publication::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(["descricao"=> "required",
        "user_id"=> "required",]);
        return Publication::create($validatedData);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Publication::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate(["descricao"=> "required",
        "user_id"=> "required",]);
        return Publication::findOrFail($id)->update($validatedData);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Publication::destroy($id);
    }
}
