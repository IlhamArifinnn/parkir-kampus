<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        if (auth()->user()->role === 'admin') {
            $kendaraans = Kendaraan::with('jenisKendaraan')->get();
        } else {
            $kendaraans = Kendaraan::with('jenisKendaraan')->where('user_id', auth()->id())->get();
        }
        return view('kendaraans.index', compact('kendaraans'));
    }

    public function create()
    {
        $jenisKendaraans = Jenis::all();
        return view('kendaraans.create', compact('jenisKendaraans'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'merk' => 'required|max:30',
            'nopol' => 'required|max:20',
            'thn_beli' => 'required|integer',
            'deskripsi' => 'required|max:200',
            'jenis_kendaraan_id' => 'required|exists:jenis,id',
            'kapasitas_kursi' => 'required|integer',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $validatedData['user_id'] = auth()->id();

        Kendaraan::create($validatedData);
        return redirect()->route('kendaraans.index')->with('success', 'Kendaraan berhasil ditambahkan.');
    }

    public function show(Kendaraan $kendaraan)
    {
        if (auth()->user()->role === 'admin' || $kendaraan->user_id === auth()->id()) {
            return view('kendaraans.show', compact('kendaraan'));
        }
        return redirect()->route('kendaraans.index')->with('error', 'Anda tidak memiliki akses untuk melihat kendaraan ini.');
    }

    public function edit(Kendaraan $kendaraan)
    {
        if (auth()->user()->role === 'admin' || $kendaraan->user_id === auth()->id()) {
            $jenisKendaraans = Jenis::all();
            return view('kendaraans.edit', compact('kendaraan', 'jenisKendaraans'));
        }
        return redirect()->route('kendaraans.index')->with('error', 'Anda tidak memiliki akses untuk mengedit kendaraan ini.');
    }

    public function update(Request $request, Kendaraan $kendaraan)
    {
        if (auth()->user()->role === 'admin' || $kendaraan->user_id === auth()->id()) {
            $validatedData = $request->validate([
                'merk' => 'required|max:30',
                'nopol' => 'required|max:20',
                'thn_beli' => 'required|integer',
                'deskripsi' => 'required|max:200',
                'jenis_kendaraan_id' => 'required|exists:jenis,id',
                'kapasitas_kursi' => 'required|integer',
                'rating' => 'required|integer|min:1|max:5',
            ]);

            $kendaraan->update($validatedData);
            return redirect()->route('kendaraans.index')->with('success', 'Kendaraan berhasil diperbarui.');
        }
        return redirect()->route('kendaraans.index')->with('error', 'Anda tidak memiliki akses untuk mengedit kendaraan ini.');
    }

    public function destroy(Kendaraan $kendaraan)
    {
        if (auth()->user()->role === 'admin' || $kendaraan->user_id === auth()->id()) {
            $kendaraan->delete();
            return redirect()->route('kendaraans.index')->with('success', 'Kendaraan berhasil dihapus.');
        }
        return redirect()->route('kendaraans.index')->with('error', 'Anda tidak memiliki akses untuk menghapus kendaraan ini.');
    }
}