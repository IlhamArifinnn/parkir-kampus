@extends('layout.template')
@section('title', 'Jenis Details - Parkir Kampus')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Jenis Details</h2>
            <p><strong>Nama:</strong> {{ $jenis->nama }}</p>
            <a href="{{ route('jenis.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
