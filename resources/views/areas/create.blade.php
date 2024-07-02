@extends('layout.template')
@section('title', isset($area) ? 'Edit Area Parkir - Parkir Kampus' : 'Create New Area Parkir - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ isset($area) ? 'Edit Area Parkir' : 'Create New Area Parkir' }}</h2>
                <form action="{{ isset($area) ? route('area-parkirs.update', $area->id) : route('area-parkirs.store') }}"
                    method="POST">
                    @csrf
                    @if (isset($area))
                        @method('PUT')
                    @endif
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama" value="{{ old('nama', isset($area) ? $area->nama : '') }}" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kapasitas">Kapasitas</label>
                        <input type="number" class="form-control @error('kapasitas') is-invalid @enderror" id="kapasitas"
                            name="kapasitas" value="{{ old('kapasitas', isset($area) ? $area->kapasitas : '') }}" required>
                        @error('kapasitas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" required>{{ old('keterangan', isset($area) ? $area->keterangan : '') }}</textarea>
                        @error('keterangan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kampus_id">Kampus</label>
                        <select class="form-control @error('kampus_id') is-invalid @enderror" id="kampus_id"
                            name="kampus_id" required>
                            <option value="">Select Kampus</option>
                            @foreach ($kampusList as $kampus)
                                <option value="{{ $kampus->id }}"
                                    {{ isset($area) && $area->kampus_id == $kampus->id ? 'selected' : '' }}>
                                    {{ $kampus->nama }}</option>
                            @endforeach
                        </select>
                        @error('kampus_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('area-parkirs.index') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
