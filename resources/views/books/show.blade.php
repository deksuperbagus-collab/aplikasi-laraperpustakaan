@extends('layouts.app')

@section('page','Detail Buku')

@section('konten')
<div class="container mt-4">
    <h3 class="mb-3">📄 Detail Buku</h3>
    
    <div class="card">
        <div class="card-body">
            <p><strong>Judul :</strong> {{ $book->judul }}</p>
            <p><strong>Penulis :</strong> {{ $book->penulis }}</p>
            <p><strong>Penerbit :</strong> {{ $book->penerbit }}</p>
            <p><strong>Tahun Terbit :</strong> {{ $book->tahun_terbit }}</p>
            <p><strong>Stok :</strong> {{ $book->stok }}</p>
        </div>
    </div>

    <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">
        Kembali
    </a>
</div>
@endsection