@extends('layout.template')
@section('title', 'Area Parkir List - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Area Parkir List</h2>
                <a href="{{ route('area_parkirs.create') }}" class="btn btn-primary mb-3">Create New Area Parkir</a>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($areaParkirs->isEmpty())
                    <div class="alert alert-warning">
                        Tidak ada data area parkir.
                    </div>
                @else
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Kapasitas</th>
                                <th>Keterangan</th>
                                <th>Kampus</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($areaParkirs as $areaParkir)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $areaParkir->nama }}</td>
                                    <td>{{ $areaParkir->kapasitas }}</td>
                                    <td>{{ $areaParkir->keterangan }}</td>
                                    <td>{{ $areaParkir->kampus->nama }}</td>
                                    <td>
                                        <a href="{{ route('area_parkirs.show', $areaParkir->id) }}" class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('area_parkirs.edit', $areaParkir->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('area_parkirs.destroy', $areaParkir->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this area parkir?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
