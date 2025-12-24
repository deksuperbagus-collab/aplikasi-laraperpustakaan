<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    /**
     * Laporan buku yang paling banyak dipinjam
     */
    public function mostBorrowed()
    {
        $books = DB::table('loans')
            ->join('books', 'loans.book_id', '=', 'books.id')
            ->select(
                'books.id',
                'books.title',
                'books.author',
                DB::raw('COUNT(loans.id) as total_borrowed')
            )
            ->groupBy('books.id', 'books.title', 'books.author')
            ->orderByDesc('total_borrowed')
            ->get();

        return view('reports.most.borrowed', compact('books'));
    }
}