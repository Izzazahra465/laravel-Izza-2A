<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel
Belajar Laravel - web-app

Project latihan praktikum Framework Laravel (mengikuti Modul Praktikum Framework Laravel oleh Rudy Eko Prasetya, S.Kom). Project dikerjakan bertahap, dan setiap fitur dibangun di atas fitur sebelumnya, mulai dari routing dasar sampai CRUD dengan database MySQL.

Penyusun: Izza Zahra
Repository: https://github.com/Izzazahra465/laravel-Izza-2A
Kesinambungan Pengerjaan

Urutan di bawah menunjukkan bagaimana tiap tahap menjadi dasar tahap berikutnya.

No	Tahap	Yang dipelajari	Berlanjut ke
1	Route dan Controller	Membuat route, controller, dan parameter URL	Dasar semua tahap berikutnya
2	Parsing data ke View	Mengirim data dari controller ke Blade dengan {{ }}	Kalkulator, daftar mahasiswa
3	Kalkulator dan Mahasiswa	Form GET/POST, Request, @csrf, @foreach	Memahami alur form untuk CRUD
4	Sistem Templating	@extends, @section, @yield, @include	Tampilan CRUD memakai layout yang sama
5	CRUD Pegawai (Employe)	Eloquent, Model, Controller, view, koneksi MySQL	Pola yang diulang pada CRUD Admin
6	CRUD Admin	Route::resource, resource controller, hash password	Latihan mandiri dari pola tahap 5
7	Migration, Seeder, Factory	Skema tabel lewat kode dan data dummy dengan Faker	Sedang dikerjakan

Tahap berikutnya dalam modul: Autentifikasi (login, logout, middleware) dan Restful API.

Teknologi
PHP dan framework Laravel
MySQL (lewat XAMPP) dan Eloquent ORM
Blade template engine
Bootstrap 5 (CDN) pada halaman admin
Composer dan Git
Daftar Route
URL	Method	Fungsi
/	GET	Halaman utama
/about	GET	Halaman about
/web, /web/profil	GET	Latihan controller dan parameter URL
/daftar/mahasiswa	GET	Daftar mahasiswa
/kalkulator/segitiga	GET, POST	Hitung luas segitiga
/dashboard	GET	Dashboard dengan sistem templating
/employe	GET	Tampil data pegawai
/employe/create, /employe/store	GET, POST	Tambah data pegawai
/employe/edit/{employe}, /employe/{employe}	GET, PUT	Ubah data pegawai
/employe/{employe}	DELETE	Hapus data pegawai
/admin	resource	CRUD admin (index, create, store, edit, update, destroy)

Daftar lengkap bisa dilihat dengan php artisan route:list.

Struktur Utama
app/
  Http/Controllers/   EmployeController, AdminController, KalkulatorController,
                      MahasiswaController, DashboardController, Web
  Models/             Employe, Admin, User
database/             migration dan seeder
resources/views/      view Blade (tampil_data, tambah_data, edit_data, admin/, dll.)
routes/web.php        definisi route
Cara Menjalankan
Pasang dependensi:
bash
composer install
Salin file environment lalu buat app key:
bash
cp .env.example .env
php artisan key:generate
Jalankan Apache dan MySQL di XAMPP, lalu buat database company di phpMyAdmin.
Atur koneksi database di .env:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=company
DB_USERNAME=root
DB_PASSWORD=
SESSION_DRIVER=file
CACHE_STORE=file
Buat tabel employes dan admins (lewat SQL di phpMyAdmin atau migration).
Jalankan server:
bash
php artisan serve
Buka http://127.0.0.1:8000/employe atau http://127.0.0.1:8000/admin.
Catatan
File .env tidak ikut di-upload karena berisi konfigurasi lokal.
Latihan migrate:fresh dilakukan pada database terpisah agar data CRUD tidak terhapus.
Project template SB Admin 2 dikerjakan terpisah di repository laravel-admin.