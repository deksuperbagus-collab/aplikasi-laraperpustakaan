@extends('layouts.app')

@section('page','Laporan Perpustakaan')

@section('konten')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">📊 Laporan Buku Paling Banyak Dipinjam</h5>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Total Dipinjam</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($books as $index => $book)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>
                                <span class="badge bg-success">
                                    {{ $book->total_borrowed }}x
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">
                                Data belum tersedia
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection