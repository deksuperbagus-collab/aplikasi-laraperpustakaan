<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illimunate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::orderBy('nama')->paginate(10);
        return view('members.index', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'no_telp' => 'nullable|string|max:50'
        ]);

        Member::create($data);

        return redirect()->route('members.index')->with('success','Anggota berhasil ditambahkan');
    }

    public function edit(Book $book)
    {
        return view('members.edit', compact('member'));
    }

    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:members,email',
            'no_telp' => 'nullable|string|max:50'
        ]);

        $member->update($data);

        return redirect()->route('members.index')->with('success','Anggota berhasil diupdate');
    }

    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->route('members.index')->with('success','Anggota berhasil dihapus');
    }
}