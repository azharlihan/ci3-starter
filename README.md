# CodeIgniter 3 Starter

Aplikasi ini merupakan aplikasi CodeIgniter versi 3.1.9 dengan beberapa modifikasi diantaranya:

- Penggunaan file `.env` untuk menyimpan variabel environment yang terpisah dari source code.
- Folder `public` yang terpisah dari aplikasi utama, dan folder publik dapat dipindah-pindah dengan menyesuaikan konstanta `BACKPATH`.
- Bisa menggunakan struktur layouting sederhana (`$this->section(), $this->endSection, $this->extend(), $this->renderSection()`) seperti pada CodeIgnier 4.
- Secara default sudah ada `.htaccess`.

Aplikasi starter ini dibuat untuk yang memiliki keterbatasan resource server (Seperti masih menggunakan PHP 5);
