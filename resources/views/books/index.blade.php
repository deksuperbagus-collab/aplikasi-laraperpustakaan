@extends('layouts.app')

@section('page','Daftar Buku')

@section('konten')
<div class="container mt-4">
    <h3 class="mb-3">📚 Daftar Buku</h3>
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">
        + Tambah Buku Baru
    </a>
     <table class="table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->judul }}</td>
                <td>{{ $book->penulis }}</td>
                <td>{{ $book->penerbit }}</td>
                <td>{{ $book->tahun_terbit }}</td>
                <td>{{ $book->stok }}</td>
                <td>
                    <a href="{{ route('books.show', $book->id) }}" 
                       class="btn btn-info btn-sm">
                        View
                    </a>
                    <a href="{{ route('books.edit', $book->id) }}" 
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>
                    <form action="{{ route('books.destroy', $book->id) }}" 
                          method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin hapus data?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
