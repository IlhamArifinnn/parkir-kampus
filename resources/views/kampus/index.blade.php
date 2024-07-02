@extends('layout.template')
@section('title', 'Kampus List - Parkir Kampus')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Kampus List</h2>
            <a href="{{ route('kampus.create') }}" class="btn btn-primary mb-2">Create New Kampus</a>
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kampuses as $kampus)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kampus->nama }}</td>
                            <td>{{ $kampus->alamat }}</td>
                            <td>
                                <a href="{{ route('kampus.show', $kampus->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('kampus.edit', $kampus->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('kampus.destroy', $kampus->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this kampus?')">Delete</button>
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
