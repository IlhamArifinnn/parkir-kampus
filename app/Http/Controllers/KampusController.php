<?php

namespace App\Http\Controllers;

use App\Models\kampus;
use Illuminate\Http\Request;

class KampusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kampuses = Kampus::latest()->get();

        // Render view with kampus list
        return view('kampus.index', compact('kampuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kampus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);

        Kampus::create($validatedData);

        return redirect()->route('kampus.index')->with('success', 'Kampus created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(kampus $kampus)
    {
        return view('kampus.show', compact('kampus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kampus $kampus)
    {
        return view('kampus.edit', compact('kampus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kampus $kampus)
    {
        $validatedData = $request->validate([
            'nama' => 'sometimes|required|string|max:255',
            'alamat' => 'sometimes|required|string|max:255',
        ]);

        $kampus->update($validatedData);

        return redirect()->route('kampus.index')->with('success', 'Kampus updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kampus $kampus)
    {
        $kampus->delete();

        return redirect()->route('kampus.index')->with('success', 'Kampus deleted successfully.');
    }
}
