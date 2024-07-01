@extends('layout.template')
@section('title', 'Jenis List - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Jenis List</h2>
                <a href="{{ route('jenis.create') }}" class="btn btn-primary mb-2">Create New Jenis</a>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jenisList as $jenis)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $jenis->nama }}</td>
                                <td>
                                    <a href="{{ route('jenis.show', $jenis->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('jenis.edit', $jenis->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('jenis.destroy', $jenis->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this jenis?')">Delete</button>
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
