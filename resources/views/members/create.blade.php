@extends('layouts.app')

@section('page','Tambah Member')

@section('konten')
<div class="container mt-4">
    <h3 class="mb-3">+ Tambah Member</h3>

    <form action="{{ route('members.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">No Telepon</label>
            <input type="text" name="no_telp" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">
            Simpan
        </button>
        <a href="{{ route('members.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </form>
</div>
@endsection
