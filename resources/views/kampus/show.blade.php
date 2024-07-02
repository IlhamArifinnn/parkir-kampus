@extends('layout.template')
@section('title', 'Kampus Details - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Kampus Details</h2>
                <p><strong>Nama:</strong> {{ $kampus->nama }}</p>
                <p><strong>Alamat:</strong> {{ $kampus->alamat }}</p>
                <a href="{{ route('kampus.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
@endsection
