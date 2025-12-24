@extends('layouts.app')

@section('page','Data Peminjaman Buku')

@section('konten')
<div class="container mt-4">
    <h3 class="mb-3">📚 Data Peminjaman Buku</h3>

    <a href="{{ route('loans.create') }}" class="btn btn-primary mb-3">
        + Tambah Peminjaman
    </a>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Member</th>
                <th>Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($loans as $loan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $loan->member->nama }}</td>
                <td>{{ $loan->book->judul }}</td>
                <td>{{ $loan->tanggal_pinjam }}</td>
                <td>
                    <span class="badge bg-warning">
                        {{ $loan->status }}
                    </span>
                </td>
                <td>
                    <a href="{{ route('loans.return', $loan->id) }}" 
                       class="btn btn-success btn-sm">
                        Kembalikan
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
