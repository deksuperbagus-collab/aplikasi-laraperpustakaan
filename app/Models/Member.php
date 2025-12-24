<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members';

    protected $fillable = [
        'nama',
        'alamat',
        'no_telp'
    ];

    /**
     * Satu member bisa memiliki banyak peminjaman
     */
    public function loans()
    {
        return $this->hasMany(Loan::class, 'id_member');
    }
}
