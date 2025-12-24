@extends('layouts.app')

@section('page','Tambah Peminjaman Buku')

@section('konten')
<div class="container mt-4">
    <h3 class="mb-3">+ Tambah Peminjaman Buku</h3>

    <form action="{{ route('loans.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Member</label>
            <select name="id_member" class="form-select" required>
                <option value="">-- Pilih Member --</option>
                @foreach ($members as $member)
                    <option value="{{ $member->id }}">
                        {{ $member->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Buku</label>
            <select name="id_buku" class="form-select" required>
                <option value="">-- Pilih Buku --</option>
                @foreach ($books as $book)
                    <option value="{{ $book->id }}">
                        {{ $book->judul }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Pinjam</label>
            <input type="date" name="tanggal_pinjam" 
                   class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">
            Simpan
        </button>
        <a href="{{ route('loans.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </form>
</div>
@endsection
