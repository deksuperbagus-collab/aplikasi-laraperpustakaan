@extends('layouts.app')

@section('page','Riwayat Peminjaman Buku')

@section('konten')
<div class="container mt-4">
    <h3 class="mb-3">🕘 Riwayat Peminjaman</h3>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Member</th>
                <th>Buku</th>
                <th>Tgl Pinjam</th>
                <th>Tgl Kembali</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($loans as $loan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $loan->member->nama }}</td>
                <td>{{ $loan->book->judul }}</td>
                <td>{{ $loan->tanggal_pinjam }}</td>
                <td>{{ $loan->tanggal_kembali ?? '-' }}</td>
                <td>
                    @if ($loan->status == 'dikembalikan')
                        <span class="badge bg-success">Dikembalikan</span>
                    @else
                        <span class="badge bg-warning">Dipinjam</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection