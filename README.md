# Belajar Dasar CRUD - XI RPL 2

Aplikasi web sederhana untuk mempelajari operasi dasar **CRUD (Create, Read, Update, Delete)** menggunakan bahasa pemrograman **PHP Native** dan database **MySQL**.

## 📁 Struktur Direktori & File

- `config.php` - Konfigurasi koneksi ke database MySQL.
- `index.php` - Halaman form input data siswa (Create).
- `prosesinput.php` - Skrip pemrosesan input data ke database.
- `view-data.php` - Halaman untuk menampilkan daftar data siswa (Read).
- `update.php` - Halaman formulir dan proses ubah data siswa (Update).
- `hapus.php` - Skrip untuk menghapus data siswa berdasarkan ID (Delete).
- `style.css` - File styling CSS untuk tampilan tabel dan layout form.
- `database.sql` - Skrip SQL untuk membuat database dan tabel `tbsiswa`.

## 🚀 Cara Menjalankan Proyek

### 1. Konfigurasi Database
1. Buka MySQL / MariaDB (misalnya via phpMyAdmin atau terminal MySQL).
2. Impor file [`database.sql`](file:///data/data/com.termux/files/home/php/pak-shin/belajardasarcrud-xirpl2/database.sql):
   ```bash
   mysql -u root -p < database.sql
   ```
3. Sesuaikan informasi koneksi (host, user, password, dan nama database) di file [`config.php`](file:///data/data/com.termux/files/home/php/pak-shin/belajardasarcrud-xirpl2/config.php) jika diperlukan.

### 2. Menjalankan Server PHP
Jalankan PHP built-in web server di folder proyek:
```bash
php -S localhost:8000
```
Buka browser dan akses:
`http://localhost:8000`
