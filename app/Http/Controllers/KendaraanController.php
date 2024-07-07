<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraans = Kendaraan::with('jenisKendaraan')->get();
        return view('kendaraans.index', compact('kendaraans'));
    }

    public function create()
    {
        if (auth()->user()->role === 'admin') {
            $jenisKendaraans = Jenis::all();
            return view('kendaraans.create', compact('jenisKendaraans'));
        }
        
        return redirect()->route('kendaraans.index')->with('error', 'Anda tidak memiliki akses untuk melakukan tindakan ini.');
    }

    public function store(Request $request)
    {
        if (auth()->user()->role === 'admin') {
            $validatedData = $request->validate([
                'merk' => 'required|max:30',
                'pemilik' => 'required|max:40',
                'nopol' => 'required|max:20',
                'thn_beli' => 'required|integer',
                'deskripsi' => 'required|max:200',
                'jenis_kendaraan_id' => 'required|exists:jenis,id',
                'kapasitas_kursi' => 'required|integer',
                'rating' => 'required|integer|min:1|max:5',
            ]);

            Kendaraan::create($validatedData);
            return redirect()->route('kendaraans.index')->with('success', 'Kendaraan berhasil ditambahkan.');
        }
        return redirect()->route('kendaraans.index')->with('error', 'Anda tidak memiliki akses untuk melakukan tindakan ini.');
    }

    public function show(Kendaraan $kendaraan)
    {
        return view('kendaraans.show', compact('kendaraan'));
    }

    public function edit(Kendaraan $kendaraan)
    {
        if (auth()->user()->role === 'admin') {
            $jenisKendaraans = Jenis::all();
            return view('kendaraans.edit', compact('kendaraan', 'jenisKendaraans'));
        }
        return redirect()->route('kendaraans.index')->with('error', 'Anda tidak memiliki akses untuk melakukan tindakan ini.');
    }

    public function update(Request $request, Kendaraan $kendaraan)
    {
        if (auth()->user()->role === 'admin') {
            $validatedData = $request->validate([
                'merk' => 'required|max:30',
                'pemilik' => 'required|max:40',
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
        return redirect()->route('kendaraans.index')->with('error', 'Anda tidak memiliki akses untuk melakukan tindakan ini.');
    }

    public function destroy(Kendaraan $kendaraan)
    {
        if (auth()->user()->role === 'admin') {
            $kendaraan->delete();

            return redirect()->route('kendaraans.index')->with('success', 'Kendaraan berhasil dihapus.');
        }
        return redirect()->route('kendaraans.index')->with('error', 'Anda tidak memiliki akses untuk melakukan tindakan ini.');
    }
}
