@extends('layout.template')
@section('title', 'Area Parkir List - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Area Parkir List</h2>
                <a href="{{ route('area-parkirs.create') }}" class="btn btn-primary mb-2">Create New Area Parkir</a>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <table class="table">
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
                        @foreach ($areas as $area)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $area->nama }}</td>
                                <td>{{ $area->kapasitas }}</td>
                                <td>{{ $area->keterangan }}</td>
                                <td>{{ $area->kampus->nama }}</td>
                                <td>
                                    <a href="{{ route('area-parkirs.show', $area->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('area-parkirs.edit', $area->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('area-parkirs.destroy', $area->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this area parkir?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
