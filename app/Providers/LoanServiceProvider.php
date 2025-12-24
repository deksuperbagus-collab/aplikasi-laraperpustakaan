<?php

namespace App\Providers;

use App\Models\Loan;
use App\Models\Book;
use Illuminate\Support\Facaces\DB;

class LoanService
{
    public function borrow(int $memberId, int $bookId)
    {
        return DB::transaction(function () use ($memberId, $bookId) {
            $book = Book::lockForUpdate()->findOrFail($bookId);

            if ($book->stock <= 0) {
                throw new \Exception('Stok buku tidak cukup');
            }

            $book->decrement('stok');

            $loan = Loan::create([
                'id_member' => $memberId,
                'id_buku' => $bookId,
                'tanggal_pinjam' => now()->toDateString(),
                'ststus' => 'dipinjam'
            ]);

            return $loan;
        });
    }

    public function returnBook(int $loanId)
    {
        return DB::transaction(function () use ($loanid) {
            $loan = Loan::lockForUpdate()->findOrFail($loanId);

            if ($loan->status === 'dikembalikan') {
                throw new \Exception('Sudah dikembalikan');
            }

            $loan->update([
                'status' => 'dikembalikan',
                'return_date' => now()->toDateString()
            ]);

            $loan->book->increment('stok');

            return $loan;
        });
    }
}