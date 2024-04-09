<?php

namespace App\Http\Controllers;
use App\Models\Ciudad;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ciudades = Ciudad::all();
        return view('ciudades.index', compact('ciudades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ciudades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Ciudad::create($request->all());
        return redirect()->route('ciudades.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ciudad $ciudad)
    {
        return view('ciudades.show', compact('ciudad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ciudad $ciudad)
    {
        return view('ciudades.edit', ['ciudad' => $ciudad]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ciudad $ciudad)
    {
        $ciudad->update($request->all());
        return redirect()->route('ciudades.index');
    }

    public function destroy(Ciudad $ciudad)
    {
        $ciudad->delete();
        return redirect()->route('ciudades.index');
    }
}
