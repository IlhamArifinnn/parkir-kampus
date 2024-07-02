@extends('layout.template')
@section('title', isset($kendaraan) ? 'Edit Kendaraan - Parkir Kampus' : 'Create New Kendaraan - Parkir Kampus')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>{{ isset($kendaraan) ? 'Edit Kendaraan' : 'Create New Kendaraan' }}</h2>
            <form action="{{ isset($kendaraan) ? route('kendaraans.update', $kendaraan->id) : route('kendaraans.store') }}" method="POST">
                @csrf
                @if (isset($kendaraan))
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="merk">Merk</label>
                    <input type="text" class="form-control @error('merk') is-invalid @enderror" id="merk" name="merk" value="{{ old('merk', isset($kendaraan) ? $kendaraan->merk : '') }}" required>
                    @error('merk')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pemilik">Pemilik</label>
                    <input type="text" class="form-control @error('pemilik') is-invalid @enderror" id="pemilik" name="pemilik" value="{{ old('pemilik', isset($kendaraan) ? $kendaraan->pemilik : '') }}" required>
                    @error('pemilik')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nopol">Nomor Polisi</label>
                    <input type="text" class="form-control @error('nopol') is-invalid @enderror" id="nopol" name="nopol" value="{{ old('nopol', isset($kendaraan) ? $kendaraan->nopol : '') }}" required>
                    @error('nopol')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="thn_beli">Tahun Beli</label>
                    <input type="number" class="form-control @error('thn_beli') is-invalid @enderror" id="thn_beli" name="thn_beli" value="{{ old('thn_beli', isset($kendaraan) ? $kendaraan->thn_beli : '') }}" required>
                    @error('thn_beli')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" required>{{ old('deskripsi', isset($kendaraan) ? $kendaraan->deskripsi : '') }}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jenis_kendaraan">Jenis Kendaraan</label>
                    <select class="form-control @error('jenis_kendaraan') is-invalid @enderror" id="jenis_kendaraan" name="jenis_kendaraan" required>
                        <option value="">Select Jenis</option>
                        @foreach($jenisList as $jenis)
                            <option value="{{ $jenis->id }}" {{ (isset($kendaraan) && $kendaraan->jenis_kendaraan == $jenis->id) ? 'selected' : '' }}>{{ $jenis->nama }}</option>
                        @endforeach
                    </select>
                    @error('jenis_kendaraan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kapasitas_kursi">Kapasitas Kursi</label>
                    <input type="number" class="form-control @error('kapasitas_kursi') is-invalid @enderror" id="kapasitas_kursi" name="kapasitas_kursi" value="{{ old('kapasitas_kursi', isset($kendaraan) ? $kendaraan->kapasitas_kursi : '') }}" required>
                    @error('kapasitas_kursi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="number" class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating" value="{{ old('rating', isset($kendaraan) ? $kendaraan->rating : '') }}" required>
                    @error('rating')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('kendaraans.index') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection
