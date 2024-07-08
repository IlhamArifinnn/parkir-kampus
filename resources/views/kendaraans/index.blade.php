@extends('layout.template')

@section('title', 'Kendaraan List - Parkir Kampus')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Kendaraan List</h2>
            <a href="{{ route('kendaraans.create') }}" class="btn btn-primary mb-3">Create New Kendaraan</a>
            
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            
            @if ($kendaraans->isEmpty())
                <div class="alert alert-warning">Anda belum memiliki kendaraan terdaftar.</div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Merk</th>
                                <th>Nopol</th>
                                <th>Pemilik Kendaraan</th>
                                <th>Tahun Beli</th>
                                <th>Deskripsi</th>
                                <th>Jenis Kendaraan</th>
                                <th>Kapasitas Kursi</th>
                                <th>Rating</th>
                                @if(auth()->user()->role == 'admin')
                                <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kendaraans as $kendaraan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kendaraan->merk }}</td>
                                    <td>{{ $kendaraan->nopol }}</td>
                                    <td>{{ $kendaraan->user->name }}</td>
                                    <td>{{ $kendaraan->thn_beli }}</td>
                                    <td>{{ Str::limit($kendaraan->deskripsi, 30) }}</td>
                                    <td>{{ $kendaraan->jenisKendaraan->nama }}</td>
                                    <td>{{ $kendaraan->kapasitas_kursi }}</td>
                                    <td>{{ $kendaraan->rating }}</td>
                                    @if(auth()->user()->role == 'admin')
                                    <td>
                                        <a href="{{ route('kendaraans.show', $kendaraan->id) }}" class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('kendaraans.edit', $kendaraan->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('kendaraans.destroy', $kendaraan->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this kendaraan?')">Delete</button>
                                        </form>
                                    </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection