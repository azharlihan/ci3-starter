# CodeIgniter 3 Starter

Aplikasi ini merupakan aplikasi CodeIgniter versi 3.1.9 dengan beberapa modifikasi diantaranya:

- Penggunaan file `.env` untuk menyimpan variabel environment yang terpisah dari source code.
- Folder `public` yang terpisah dari aplikasi utama, dan folder publik dapat dipindah-pindah dengan menyesuaikan konstanta `BACKPATH`.
- config default sudah autoload library database, dan helper url.
- Bisa menggunakan struktur layouting sederhana ( `$this->section()`, `$this->endSection()`, `$this->extend()`, `$this->renderSection()` ) seperti pada CodeIgnier 4.
- Secara default sudah ada `.htaccess`.
- penggunaan autoload & namespace untuk semua library tambahan non composer yang di extend
- Sudah di integrasikan library chriskacerguis/codeigniter-restserver untuk penanganan api

Aplikasi starter ini dibuat untuk yang memiliki keterbatasan resource server (Seperti masih menggunakan PHP 5);

## Cara Install

1. Clone repository ini.
1. Jalankan terminal / cmd, arahkan ke folder root dan ketik `composer install`.
1. Isi variabel yang terdapat pada file `.env`.
