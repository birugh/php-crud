# Aplikasi CRUD PHP

Ini adalah aplikasi CRUD (Create, Read, Update, Delete) sederhana menggunakan PHP untuk mengelola data siswa dan nilai mereka.

## Struktur Proyek

```
config/
    config.php
css/
    style.css
db_kampus.sql
forms/
    form-daftar.php
    form-nilai.php
    forms-edit/
        form-edit-nilai.php
        form-edit-siswa.php
index.php
lists/
    list-nilai.php
    list-siswa.php
PRAKTIK CRUD.pdf
processes/
    delete/
        hapus-nilai.php
        hapus.php
    proses-edit-nilai.php
    proses-edit-siswa.php
    proses-nilai.php
    proses-pendaftaran.php
```

### Konfigurasi

- **config/config.php**: Berisi konfigurasi koneksi database.

### Database

- **db_kampus.sql**: File SQL untuk membuat dan mengisi tabel database `tbl_siswa` dan `tbl_mapel`.

### Formulir

- **forms/form-daftar.php**: Formulir untuk mendaftarkan siswa baru.
- **forms/form-nilai.php**: Formulir untuk memasukkan nilai siswa.
- **forms/forms-edit/form-edit-nilai.php**: Formulir untuk mengedit nilai siswa.
- **forms/forms-edit/form-edit-siswa.php**: Formulir untuk mengedit data siswa.

### Daftar

- **lists/list-nilai.php**: Menampilkan daftar nilai siswa.
- **lists/list-siswa.php**: Menampilkan daftar siswa yang terdaftar.

### Proses

- **processes/proses-pendaftaran.php**: Menangani proses pendaftaran siswa.
- **processes/proses-nilai.php**: Menangani proses memasukkan nilai siswa.
- **processes/proses-edit-nilai.php**: Menangani proses mengedit nilai siswa.
- **processes/proses-edit-siswa.php**: Menangani proses mengedit data siswa.
- **processes/delete/hapus-nilai.php**: Menangani proses menghapus nilai siswa.
- **processes/delete/hapus.php**: Menangani proses menghapus data siswa.

### Style

- **css/style.css**: Berisi CSS untuk aplikasi.

### Halaman Utama

- **index.php**: Halaman utama aplikasi dengan tautan untuk mendaftarkan siswa, daftar siswa, memasukkan nilai, dan daftar nilai.

## Cara Menggunakan

1. Impor file `db_kampus.sql` ke database MySQL Anda untuk membuat tabel yang diperlukan dan mengisinya dengan data contoh.
2. Konfigurasikan koneksi database Anda di `config/config.php`.
3. Buka `index.php` di browser untuk mulai menggunakan aplikasi.
