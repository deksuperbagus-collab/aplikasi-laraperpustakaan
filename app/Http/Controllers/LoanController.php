<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Book;
use App\Models\Member;
use App\Services\LoanService;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    protected $loanService;

    public function __construct(LoanService $loanService)
    {
        $this->loanService = $loanService;
    }

    public function index()
    {
        $loans = Loan::with(['book','member'])->orderBy('loan_date','desc')->paginate(15);
        return view('loans.index', compact('loans'));
    }

    public function create()
    {
        $members = Member::orderBy('name')->get();
        $books = Book::where('stock','>',0)->orderBy('title')->get();
        return view('loans.create', compact('members','books'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_member' => 'required|exists:id_member',
            'id_buku' => 'required|exists:id_buku'
        ]);

        try {
            $this->loanService->borrow($data['id_member'], $data['id_buku']);
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }

        return redirect()->route('loans.index')->with('success','Peminjaman berhasil');
    }

    public function returnBook($id)
    {
        try {
            $this->loanService->returnBook($id);
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }

        return redirect()->route('loans.index')->with('success','Pengembalian berhasil');
    }
}