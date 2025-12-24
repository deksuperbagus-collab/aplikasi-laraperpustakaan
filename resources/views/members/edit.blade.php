@extends('layouts.app')

@section('page','Edit Member')

@section('konten')
<div class="container mt-4">
    <h3 class="mb-3">✏ Edit Member</h3>

    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" 
                   class="form-control" 
                   value="{{ $member->nama }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" 
                      class="form-control" rows="3" required>{{ $member->alamat }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">No Telepon</label>
            <input type="text" name="no_telp" 
                   class="form-control" 
                   value="{{ $member->no_telp }}" required>
        </div>
        <button type="submit" class="btn btn-warning">
            Update
        </button>
        <a href="{{ route('members.index') }}" class="btn btn-secondary">
            Batal
        </a>
    </form>
</div>
@endsection
