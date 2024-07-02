@extends('layout.template')
@section('title', 'Transaksi List - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Transaksi List</h2>
                <a href="{{ route('transaksis.create') }}" class="btn btn-primary mb-2">Create New Transaksi</a>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tanggal</th>
                            <th>Mulai</th>
                            <th>Akhir</th>
                            <th>Keterangan</th>
                            <th>Biaya</th>
                            <th>Kendaraan</th>
                            <th>Area Parkir</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksis as $transaksi)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $transaksi->tanggal }}</td>
                                <td>{{ $transaksi->mulai }}</td>
                                <td>{{ $transaksi->akhir }}</td>
                                <td>{{ $transaksi->keterangan }}</td>
                                <td>{{ $transaksi->biaya }}</td>
                                <td>{{ $transaksi->kendaraan->merk }} - {{ $transaksi->kendaraan->nopol }}</td>
                                <td>{{ $transaksi->area_parkir->nama }}</td>
                                <td>
                                    <a href="{{ route('transaksis.show', $transaksi->id) }}"
                                        class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('transaksis.edit', $transaksi->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('transaksis.destroy', $transaksi->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this transaksi?')">Delete</button>
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
