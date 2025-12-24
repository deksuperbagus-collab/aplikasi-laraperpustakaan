# 📚 Sistem Informasi Perpustakaan (Laravel)

Sistem Informasi Perpustakaan berbasis **Laravel** yang digunakan untuk mengelola data buku, member, peminjaman, pengembalian, serta laporan buku yang paling banyak dipinjam.

Proyek ini dibuat untuk keperluan **tugas / project akhir perkuliahan**.

---

## ✨ Fitur Utama

- 📖 Manajemen Data Buku (CRUD)
- 👤 Manajemen Data Member
- 🔄 Peminjaman & Pengembalian Buku
- 📊 Laporan Buku Paling Banyak Dipinjam
- 🎨 Tampilan menggunakan Bootstrap
- ❌ Tanpa autentikasi (login)

---

## 🛠️ Teknologi yang Digunakan

- PHP 8+
- Laravel 10+
- MySQL / MariaDB
- Bootstrap 5
- Blade Template
- Eloquent ORM

---

## 📂 Struktur Folder Penting

app/
└── Http/
└── Controllers/
├── BookController.php
├── MemberController.php
├── LoanController.php
└── ReportController.php

resources/
└── views/
├── books/
├── members/
├── loans/
└── reports/
└── most.borrowed.blade.php

routes/
└── web.php

---

▶️ Cara Menjalankan Proyek
1. Clone repository
   git clone https://github.com/deksuperbagus-collab/aplikasi-laraperpustakaan.git
2. Install dependency
   composer install
3. Copy file environment
   cp .env.example .env
4. Atur database di .env
5. Generate key
   php artisan key:generate
6. Migrasi database
   php artisan migrate
7. Jalankan server
    php artisan serve
