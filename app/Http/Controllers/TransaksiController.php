<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksis = Transaksi::latest()->get();

        return view('transaksis.index', compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaksis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'mulai' => 'required|date_format:Y-m-d H:i:s',
            'akhir' => 'required|date_format:Y-m-d H:i:s',
            'keterangan' => 'required|string|max:255',
            'biaya' => 'required|numeric',
            'kendaraan_id' => 'required|exists:kendaraans,id',
            'area_parkir' => 'required|exists:area_parkirs,id',
        ]);

        Transaksi::create($validatedData);

        return redirect()->route('transaksis.index')->with('success', 'Transaksi created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        return view('transaksis.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        return view('transaksis.edit', compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $validatedData = $request->validate([
            'tanggal' => 'sometimes|required|date',
            'mulai' => 'sometimes|required|date_format:Y-m-d H:i:s',
            'akhir' => 'sometimes|required|date_format:Y-m-d H:i:s',
            'keterangan' => 'sometimes|required|string|max:255',
            'biaya' => 'sometimes|required|numeric',
            'kendaraan_id' => 'sometimes|required|exists:kendaraans,id',
            'area_parkir' => 'sometimes|required|exists:area_parkirs,id',
        ]);

        $transaksi->update($validatedData);

        return redirect()->route('transaksis.index')->with('success', 'Transaksi updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();

        return redirect()->route('transaksis.index')->with('success', 'Transaksi deleted successfully.');

    }
}
