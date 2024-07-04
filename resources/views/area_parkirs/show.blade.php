@extends('layout.template')
@section('title', 'Area Parkir Details - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Area Parkir Details</h2>
                <p><strong>Nama:</strong> {{ $areaParkir->nama }}</p>
                <p><strong>Kapasitas:</strong> {{ $areaParkir->kapasitas }}</p>
                <p><strong>Keterangan:</strong> {{ $areaParkir->keterangan }}</p>
                <p><strong>Kampus:</strong> {{ $areaParkir->kampus->nama }}</p>
                <a href="{{ route('area-parkirs.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
@endsection
