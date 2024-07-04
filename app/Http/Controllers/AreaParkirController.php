<?php

namespace App\Http\Controllers;

use App\Models\AreaParkir;
use App\Models\Kampus;
use Illuminate\Http\Request;

class AreaParkirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areaParkirs = AreaParkir::with('kampus')->get();
        return view('area_parkirs.index', compact('areaParkirs'));
    }

    public function create()
    {
        $kampus = Kampus::all();
        return view('area_parkirs.create', compact('kampus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:30',
            'kapasitas' => 'required|integer',
            'keterangan' => 'nullable|string|max:45',
            'kampus_id' => 'required|exists:kampus,id',
        ]);

        AreaParkir::create($request->all());

        return redirect()->route('area_parkirs.index')->with('success', 'Area parkir created successfully.');
    }

    public function show(AreaParkir $areaParkir)
    {
        return view('area_parkirs.show', compact('areaParkir'));
    }

    public function edit(AreaParkir $areaParkir)
    {
        $kampus = Kampus::all();
        return view('area_parkirs.edit', compact('areaParkir', 'kampus'));
    }

    public function update(Request $request, AreaParkir $areaParkir)
    {
        $request->validate([
            'nama' => 'required|string|max:30',
            'kapasitas' => 'required|integer',
            'keterangan' => 'nullable|string|max:45',
            'kampus_id' => 'required|exists:kampus,id',
        ]);

        $areaParkir->update($request->all());

        return redirect()->route('area_parkirs.index')->with('success', 'Area parkir updated successfully.');
    }

    public function destroy(AreaParkir $areaParkir)
    {
        $areaParkir->delete();
        return redirect()->route('area_parkirs.index')->with('success', 'Area parkir deleted successfully.');
    }
}
