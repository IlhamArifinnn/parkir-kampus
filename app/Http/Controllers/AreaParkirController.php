<?php

namespace App\Http\Controllers;

use App\Models\AreaParkir;
use Illuminate\Http\Request;

class AreaParkirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areas = AreaParkir::latest()->get();

        //render view with products
        return view('areas.index', compact('areas'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('areas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'kapasitas' => 'required|integer',
            'keterangan' => 'required|string',
            'kampus_id' => 'required|exists:kampus,id',
        ]);

        AreaParkir::create($validatedData);

        return redirect()->route('area-parkirs.index')->with('success', 'Area parkir created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(AreaParkir $areaParkir)
    {
        return view('areas.show', compact('areaParkir'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AreaParkir $areaParkir)
    {
        return view('areas.edit', compact('areaParkir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AreaParkir $areaParkir)
    {
        $validatedData = $request->validate([
            'nama' => 'sometimes|required|string|max:255',
            'kapasitas' => 'sometimes|required|integer',
            'keterangan' => 'sometimes|required|string',
            'kampus_id' => 'sometimes|required|exists:kampus,id',
        ]);

        $areaParkir->update($validatedData);

        return redirect()->route('area-parkirs.index')->with('success', 'Area parkir updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AreaParkir $areaParkir)
    {
        $areaParkir->delete();

        return redirect()->route('area-parkirs.index')->with('success', 'Area parkir deleted successfully.');
    }
}
