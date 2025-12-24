@extends('layouts.app')

@section('page','Buat Buku Baru')

@section('konten')
<div class="container mt-4">
    <h3 class="mb-3">+ Buat Buku Baru</h3>
    
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Penulis</label>
            <input type="text" name="penulis" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Penerbit</label>
            <input type="text" name="penerbit" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tahun Terbit</label>
            <input type="text" name="tahun_terbit" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Stok</label>
            <input type="text" name="stok" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">
            Simpan
        </button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </form>
</div>
@endsection