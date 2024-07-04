@extends('layout.template')
@section('title', 'Kendaraan Details - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Kendaraan Details</h2>
                <p><strong>Merk:</strong> {{ $kendaraan->merk }}</p>
                <p><strong>Pemilik:</strong> {{ $kendaraan->pemilik }}</p>
                <p><strong>Nomor Polisi:</strong> {{ $kendaraan->nopol }}</p>
                <p><strong>Tahun Beli:</strong> {{ $kendaraan->thn_beli }}</p>
                <p><strong>Deskripsi:</strong> {{ $kendaraan->deskripsi }}</p>
                <p><strong>Jenis Kendaraan:</strong> {{ $kendaraan->jenis->nama }}</p>
                <p><strong>Kapasitas Kursi:</strong> {{ $kendaraan->kapasitas_kursi }}</p>
                <p><strong>Rating:</strong> {{ $kendaraan->rating }}</p>
                <a href="{{ route('kendaraans.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
@endsection
