@extends('layouts.app')

@section('page','Edit Buku')

@section('konten')
<div class="container mt-4">
    <h3 class="mb-3">✏ Edit Buku</h3>
    
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" 
                   class="form-control" 
                   value="{{ $book->judul }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Penulis</label>
            <input type="text" name="penulis" 
                   class="form-control" 
                   value="{{ $book->penulis }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Penerbit</label>
            <input type="text" name="penerbit" 
                   class="form-control" 
                   value="{{ $book->penerbit }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tahun Terbit</label>
            <input type="text" name="tahun_terbit" 
                   class="form-control" 
                   value="{{ $book->tahun_terbit }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Stok</label>
            <input type="text" name="stok" 
                   class="form-control" 
                   value="{{ $book->stok }}" required>
        </div>
        <button type="submit" class="btn btn-warning">
            Update
        </button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">
            Batal
        </a>
    </form>
</div>
@endsection
