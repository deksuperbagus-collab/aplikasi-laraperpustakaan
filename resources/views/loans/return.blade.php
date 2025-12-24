@extends('layouts.app')

@section('page','Pengembalian Buku')

@section('konten')
<div class="container mt-4">
    <h3 class="mb-3">↩ Pengembalian Buku</h3>

    <form action="{{ route('loans.update', $loan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Member</label>
            <input type="text" class="form-control" 
                   value="{{ $loan->member->nama }}" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label">Buku</label>
            <input type="text" class="form-control" 
                   value="{{ $loan->book->judul }}" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Kembali</label>
            <input type="date" name="tanggal_kembali" 
                   class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">
            Konfirmasi Pengembalian
        </button>
        <a href="{{ route('loans.index') }}" class="btn btn-secondary">
            Batal
        </a>
    </form>
</div>
@endsection
