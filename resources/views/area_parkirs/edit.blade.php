@extends('layout.template')
@section('title', 'Edit Area Parkir - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Area Parkir</h2>
                <form action="{{ route('area_parkirs.update', $areaParkir->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ $areaParkir->nama }}" required>
                    </div>
                    <div class="form-group">
                        <label for="kapasitas">Kapasitas</label>
                        <input type="number" name="kapasitas" id="kapasitas" class="form-control" value="{{ $areaParkir->kapasitas }}" required>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea name="keterangan" id="keterangan" class="form-control">{{ $areaParkir->keterangan }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="kampus_id">Kampus</label>
                        <select name="kampus_id" id="kampus_id" class="form-control" required>
                            @foreach($kampus as $k)
                                <option value="{{ $k->id }}" {{ $k->id == $areaParkir->kampus_id ? 'selected' : '' }}>{{ $k->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
