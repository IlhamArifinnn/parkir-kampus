<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Kendaraan;
use App\Models\AreaParkir;
use Carbon\Carbon;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksis = Transaksi::with(['kendaraan', 'areaParkir'])->get();
        return view('transaksis.index', compact('transaksis'));
    }

    public function create()
    {
        $kendaraans = Kendaraan::all();
        $areaParkirs = AreaParkir::all();
        return view('transaksis.create', compact('kendaraans', 'areaParkirs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'mulai' => 'required|date_format:H:i',
            'akhir' => 'required|date_format:H:i|after:mulai',
            'keterangan' => 'required|max:100',
            'kendaraan_id' => 'required|exists:kendaraans,id',
            'area_parkir_id' => 'required|exists:area_parkirs,id',
        ]);

        $kendaraan = Kendaraan::find($request->kendaraan_id);
        $mulai = Carbon::createFromFormat('H:i', $request->mulai);
        $akhir = Carbon::createFromFormat('H:i', $request->akhir);
        $durasiJam = $mulai->diffInHours($akhir);

        $tarif = ($kendaraan->jenis == 'mobil') ? 5000 : 2000;
        $biaya = $durasiJam * $tarif;

        Transaksi::create([
            'tanggal' => $request->tanggal,
            'mulai' => $request->mulai,
            'akhir' => $request->akhir,
            'keterangan' => $request->keterangan,
            'biaya' => $biaya,
            'kendaraan_id' => $request->kendaraan_id,
            'area_parkir_id' => $request->area_parkir_id,
        ]);

        return redirect()->route('transaksis.index')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    public function show(Transaksi $transaksi)
    {
        return view('transaksis.show', compact('transaksi'));
    }

    public function edit(Transaksi $transaksi)
    {
        $kendaraans = Kendaraan::all();
        $areaParkirs = AreaParkir::all();
        return view('transaksis.edit', compact('transaksi', 'kendaraans', 'areaParkirs'));
    }

    public function update(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'mulai' => 'required|date_format:H:i',
            'akhir' => 'required|date_format:H:i|after:mulai',
            'keterangan' => 'required|max:100',
            'kendaraan_id' => 'required|exists:kendaraans,id',
            'area_parkir_id' => 'required|exists:area_parkirs,id',
        ]);

        $kendaraan = Kendaraan::find($request->kendaraan_id);
        $mulai = Carbon::createFromFormat('H:i', $request->mulai);
        $akhir = Carbon::createFromFormat('H:i', $request->akhir);
        $durasiJam = $mulai->diffInHours($akhir);

        $tarif = ($kendaraan->jenis == 'mobil') ? 5000 : 2000;
        $biaya = $durasiJam * $tarif;

        $transaksi->update([
            'tanggal' => $request->tanggal,
            'mulai' => $request->mulai,
            'akhir' => $request->akhir,
            'keterangan' => $request->keterangan,
            'biaya' => $biaya,
            'kendaraan_id' => $request->kendaraan_id,
            'area_parkir_id' => $request->area_parkir_id,
        ]);

        return redirect()->route('transaksis.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();

        return redirect()->route('transaksis.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
