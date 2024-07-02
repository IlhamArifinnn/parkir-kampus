@extends('layout.template')
@section('title', isset($transaksi) ? 'Edit Transaksi - Parkir Kampus' : 'Create New Transaksi - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ isset($transaksi) ? 'Edit Transaksi' : 'Create New Transaksi' }}</h2>
                <form
                    action="{{ isset($transaksi) ? route('transaksis.update', $transaksi->id) : route('transaksis.store') }}"
                    method="POST">
                    @csrf
                    @if (isset($transaksi))
                        @method('PUT')
                    @endif
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal"
                            name="tanggal" value="{{ old('tanggal', isset($transaksi) ? $transaksi->tanggal : '') }}"
                            required>
                        @error('tanggal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="mulai">Mulai</label>
                        <input type="datetime-local" class="form-control @error('mulai') is-invalid @enderror"
                            id="mulai" name="mulai"
                            value="{{ old('mulai', isset($transaksi) ? $transaksi->mulai : '') }}" required>
                        @error('mulai')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="akhir">Akhir</label>
                        <input type="datetime-local" class="form-control @error('akhir') is-invalid @enderror"
                            id="akhir" name="akhir"
                            value="{{ old('akhir', isset($transaksi) ? $transaksi->akhir : '') }}" required>
                        @error('akhir')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" required>{{ old('keterangan', isset($transaksi) ? $transaksi->keterangan : '') }}</textarea>
                        @error('keterangan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="biaya">Biaya</label>
                        <input type="number" step="0.01" class="form-control @error('biaya') is-invalid @enderror"
                            id="biaya" name="biaya"
                            value="{{ old('biaya', isset($transaksi) ? $transaksi->biaya : '') }}" required>
                        @error('biaya')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kendaraan_id">Kendaraan</label>
                        <select class="form-control @error('kendaraan_id') is-invalid @enderror" id="kendaraan_id"
                            name="kendaraan_id" required>
                            <option value="">Select Kendaraan</option>
                            @foreach ($kendaraans as $kendaraan)
                                <option value="{{ $kendaraan->id }}"
                                    {{ isset($transaksi) && $transaksi->kendaraan_id == $kendaraan->id ? 'selected' : '' }}>
                                    {{ $kendaraan->merk }} - {{ $kendaraan->nopol }}</option>
                            @endforeach
                        </select>
                        @error('kendaraan_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="area_parkir">Area Parkir</label>
                        <select class="form-control @error('area_parkir') is-invalid @enderror" id="area_parkir"
                            name="area_parkir" required>
                            <option value="">Select Area Parkir</option>
                            @foreach ($areaParkirs as $area)
                                <option value="{{ $area->id }}"
                                    {{ isset($transaksi) && $transaksi->area_parkir == $area->id ? 'selected' : '' }}>
                                    {{ $area->nama }}</option>
                            @endforeach
                        </select>
                        @error('area_parkir')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('transaksis.index') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
