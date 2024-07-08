@extends('layout.template')

@section('title', 'Transaksi List - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Transaksi List</h2>
                @if(auth()->user()->role == 'user')
                    <a href="{{ route('transaksis.create') }}" class="btn btn-primary mb-3">Create New Transaksi</a>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if ($transaksis->isEmpty())
                    <div class="alert alert-warning">Tidak ada data transaksi.</div>
                @else
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>Mulai</th>
                                <th>Akhir</th>
                                <th>Kendaraan</th>
                                <th>Area Parkir</th>
                                <th>Biaya</th>
                                @if(auth()->user()->role == 'admin')
                                    <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksis as $transaksi)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ \Carbon\Carbon::parse($transaksi->tanggal)->format('d/m/Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($transaksi->mulai)->format('H:i') }}</td>
                                    <td>
                                        @if ($transaksi->keluar)
                                            {{ \Carbon\Carbon::parse($transaksi->keluar)->format('H:i') }}
                                        @else
                                            <!-- Handle case where 'keluar' is empty -->
                                            <!-- You can show a placeholder or leave it blank -->
                                        @endif
                                    </td>
                                    <td>{{ $transaksi->kendaraan->merk }} - {{ $transaksi->kendaraan->nopol }}</td>
                                    <td>{{ $transaksi->areaParkir->nama }}</td>
                                    <td>Rp {{ number_format($transaksi->biaya, 0, ',', '.') }}</td>
                                    @if(auth()->user()->role == 'admin')
                                        <td>
                                            <a href="{{ route('transaksis.show', $transaksi->id) }}" class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('transaksis.edit', $transaksi->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('transaksis.destroy', $transaksi->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this transaksi?')">Delete</button>
                                            </form>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
