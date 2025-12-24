<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $table = 'loans';

    protected $fillable = [
        'id_member',
        'id_buku',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status'
    ];

    /**
     * Relasi ke tabel buku
     * Loan belongsTo Book
     */
    public function book()
    {
        return $this->belongsTo(Book::class, 'id_buku');
    }

    /**
     * Relasi ke tabel member
     * Loan belongsTo Member
     */
    public function member()
    {
        return $this->belongsTo(Member::class, 'id_member');
    }
}
