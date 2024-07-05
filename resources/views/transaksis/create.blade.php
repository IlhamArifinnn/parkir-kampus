@extends('layout.template')

@section('title', 'Tambah Transaksi - Parkir Kampus')

@section('content')
<div class="container">
    <h2>Tambah Transaksi</h2>
    <form action="{{ route('transaksis.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') }}" required>
            @error('tanggal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="mulai">Mulai:</label>
            <input type="time" name="mulai" id="mulai" class="form-control @error('mulai') is-invalid @enderror" value="{{ old('mulai') }}" required>
            @error('mulai')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan:</label>
            <input type="text" name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan') }}" required maxlength="100">
            @error('keterangan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="kendaraan_id">Kendaraan:</label>
            <select name="kendaraan_id" id="kendaraan_id" class="form-control @error('kendaraan_id') is-invalid @enderror" required>
                <option value="">Pilih Kendaraan</option>
                @foreach ($kendaraans as $kendaraan)
                    <option value="{{ $kendaraan->id }}" {{ old('kendaraan_id') == $kendaraan->id ? 'selected' : '' }}>
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
            <select name="area_parkir_id" id="area_parkir_id" class="form-control @error('area_parkir_id') is-invalid @enderror" required>
                <option value="">Pilih Area Parkir</option>
                @foreach ($areaParkirs as $areaParkir)
                    <option value="{{ $areaParkir->id }}" {{ old('area_parkir_id') == $areaParkir->id ? 'selected' : '' }}>
                        {{ $areaParkir->nama }}
                    </option>
                @endforeach
            </select>
            @error('area_parkir_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('transaksis.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
