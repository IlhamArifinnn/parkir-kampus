<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenisList = Jenis::latest()->get();

        // Render view with jenis list
        return view('jenis.index', compact('jenisList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        Jenis::create($validatedData);

        return redirect()->route('jenis.index')->with('success', 'Jenis created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jenis $jenis)
    {
        return view('jenis.show', compact('jenis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jenis $jenis)
    {
        return view('jenis.edit', compact('jenis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jenis $jenis)
    {
        $validatedData = $request->validate([
            'nama' => 'sometimes|required|string|max:255',
        ]);

        $jenis->update($validatedData);

        return redirect()->route('jenis.index')->with('success', 'Jenis updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jenis $jenis)
    {
        $jenis->delete();

        return redirect()->route('jenis.index')->with('success', 'Jenis deleted successfully.');

    }
}
