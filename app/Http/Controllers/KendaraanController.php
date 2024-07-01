<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kendaraans = Kendaraan::latest()->get();

        // Render view with kendaraan list
        return view('kendaraans.index', compact('kendaraans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kendaraans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'merk' => 'required|string|max:255',
            'pemilik' => 'required|string|max:255',
            'nopol' => 'required|string|max:255',
            'thn_beli' => 'required|integer|min:1900|max:' . date('Y'),
            'deskripsi' => 'required|string',
            'jenis_kendaraan' => 'required|exists:jenis,id',
            'kapasitas_kursi' => 'required|integer',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Kendaraan::create($validatedData);

        return redirect()->route('kendaraans.index')->with('success', 'Kendaraan created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Kendaraan $kendaraan)
    {
        return view('kendaraans.show', compact('kendaraan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kendaraan $kendaraan)
    {
        return view('kendaraans.edit', compact('kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kendaraan $kendaraan)
    {
        $validatedData = $request->validate([
            'merk' => 'sometimes|required|string|max:255',
            'pemilik' => 'sometimes|required|string|max:255',
            'nopol' => 'sometimes|required|string|max:255',
            'thn_beli' => 'sometimes|required|integer|min:1900|max:' . date('Y'),
            'deskripsi' => 'sometimes|required|string',
            'jenis_kendaraan' => 'sometimes|required|exists:jenis,id',
            'kapasitas_kursi' => 'sometimes|required|integer',
            'rating' => 'sometimes|required|integer|min:1|max:5',
        ]);

        $kendaraan->update($validatedData);

        return redirect()->route('kendaraans.index')->with('success', 'Kendaraan updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kendaraan $kendaraan)
    {
        $kendaraan->delete();

        return redirect()->route('kendaraans.index')->with('success', 'Kendaraan deleted successfully.');

    }
}
