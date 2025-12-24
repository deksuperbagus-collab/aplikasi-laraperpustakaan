@extends('layouts.app')

@section('page','Daftar Member Perpustakaan')

@section('konten')
<div class="container mt-4">
    <h3 class="mb-3">👥 Data Member Perpustakaan</h3>

    <a href="{{ route('members.create') }}" class="btn btn-primary mb-3">
        + Tambah Member
    </a>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Telp</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $member->nama }}</td>
                <td>{{ $member->no_telp }}</td>
                <td>
                    <a href="{{ route('members.show', $member->id) }}" 
                       class="btn btn-info btn-sm">
                        Detail
                    </a>
                    <a href="{{ route('members.edit', $member->id) }}" 
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>
                    <form action="{{ route('members.destroy', $member->id) }}" 
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
