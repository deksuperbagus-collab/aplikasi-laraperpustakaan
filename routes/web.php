<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController::class);
Route::resource('members', MemberController::class);
Route::resource('loans', LoanController::class);

Route::get('/loans', [LoanController::class, 'index'])->name('loans.index');
Route::post('/loans', [LoanController::class, 'store'])->name('loans.store');
Route::post('/loans/{id}/return', [LoanController::class, 'returnBook'])->name('loans.return');


Route::get('/reports/most-borrowed', [ReportController::class, 'mostBorrowed'])
     ->name('reports.mostBorrowed');