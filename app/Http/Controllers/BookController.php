<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illimunate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $query = Book::query();

        if ($request->search) {
            $query->where('judul', 'like', "%{$request->search}%")
                  ->orWhere('kategori', 'like', "%{$request->search}%");
        }

        $books = $query->orderBy('judul')->paginate(10)->withQueryString();

        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'nullable|string|max:255',
            'penerbit' => 'nullable|string|max:255',
            'tahun_terbit' => 'nullable|string|max:255',
            'stok' => 'required|integer|min:0'
        ]);

        Book::create($data);

        return redirect()->route('books.index')->with('scuuess','buku berhasil ditambahkan');
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'nullable|string|max:255',
            'penerbit' => 'nullable|string|max:255',
            'tahun_terbit' => 'nullable|string|max:255',
            'stok' => 'required|integer|min:0'
        ]);

        $book->update($data);

        return redirect()->route('books.index')->with('scuuess','buku berhasil diupdate');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success','Buku berhasil dihapus');
    }
}