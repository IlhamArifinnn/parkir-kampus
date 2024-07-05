@extends('layout.template')

@section('title', 'Edit Transaksi - Parkir Kampus')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Edit Transaksi</h2>
            <form action="{{ route('transaksis.update', $transaksi->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="tanggal">Tanggal:</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal', optional($transaksi->tanggal)->format('Y-m-d')) }}" required>
                    @error('tanggal')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="mulai">Mulai:</label>
                    <input type="time" name="mulai" id="mulai" class="form-control @error('mulai') is-invalid @enderror" value="{{ old('mulai', optional($transaksi->mulai)->format('H:i')) }}" required>
                    @error('mulai')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="keluar">Keluar:</label>
                    <input type="time" name="keluar" id="keluar" class="form-control @error('keluar') is-invalid @enderror" value="{{ old('keluar', optional($transaksi->keluar)->format('H:i')) }}">
                    @error('keluar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan:</label>
                    <input type="text" name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan', $transaksi->keterangan) }}" required>
                    @error('keterangan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kendaraan_id">Kendaraan:</label>
                    <select name="kendaraan_id" id="kendaraan_id" class="form-control @error('kendaraan_id') is-invalid @enderror">
                        @foreach($kendaraans as $kendaraan)
                            <option value="{{ $kendaraan->id }}" {{ $kendaraan->id == old('kendaraan_id', $transaksi->kendaraan_id) ? 'selected' : '' }}>
                                {{ $kendaraan->merk }} - {{ $kendaraan->nopol }}
                            </option>
                        @endforeach
                    </select>
                    @error('kendaraan_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="area_parkir_id">Area Parkir:</label>
                    <select name="area_parkir_id" id="area_parkir_id" class="form-control @error('area_parkir_id') is-invalid @enderror">
                        @foreach($areaParkirs as $areaParkir)
                            <option value="{{ $areaParkir->id }}" {{ $areaParkir->id == old('area_parkir_id', $transaksi->area_parkir_id) ? 'selected' : '' }}>
                                {{ $areaParkir->nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('area_parkir_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update Transaksi</button>
            </form>
        </div>
    </div>
</div>
@endsection
