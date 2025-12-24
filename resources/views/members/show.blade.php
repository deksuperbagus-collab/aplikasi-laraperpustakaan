@extends('layouts.app')

@section('page','Detail Member')

@section('konten')
<div class="container mt-4">
    <h3 class="mb-3">📄 Detail Member</h3>

    <div class="card">
        <div class="card-body">
            <p><strong>Nama :</strong> {{ $member->nama }}</p>
            <p><strong>Alamat :</strong> {{ $member->alamat }}</p>
            <p><strong>No Telp :</strong> {{ $member->no_telp }}</p>
        </div>
    </div>

    <h5 class="mt-4">📚 Riwayat Peminjaman</h5>

    <table class="table table-bordered">
        <thead class="table-secondary">
            <tr>
                <th>No</th>
                <th>Buku</th>
                <th>Tgl Pinjam</th>
                <th>Tgl Kembali</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($member->loans as $loan)
            <tr>
                <td>{{ $loop->iteration }}</td>
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

    <a href="{{ route('members.index') }}" class="btn btn-secondary mt-3">
        Kembali
    </a>
</div>
@endsection