@extends('layout.template')
@section('title', 'Create New Jenis - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Create New Jenis</h2>
                <form action="{{ route('jenis.store') }}" method="POST">
                    @csrf
                    @if (isset($jenis))
                        @method('PUT')
                    @endif
                    <div class="form-group mb-2">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                            value="{{ old('nama') }}" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary ">Submit</button>
                    <a href="{{ route('jenis.index') }}" class="btn btn-secondary ">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
