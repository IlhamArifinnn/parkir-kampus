@extends('layout.template')
@section('title', 'Jenis List - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Jenis List</h2>
                <a href="{{ route('jenis.create') }}" class="btn btn-primary mb-3">Create New Jenis</a>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($jenis->isEmpty())
                    <div class="alert alert-warning">
                        Tidak ada data jenis.
                    </div>
                @else
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jenis as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="{{ route('jenis.show', $item->id) }}" class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('jenis.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('jenis.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this jenis?')">Delete</button>
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
