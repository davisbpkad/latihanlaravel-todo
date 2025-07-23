<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel ToDo App

Aplikasi ToDo sederhana berbasis Laravel 12 dan TailwindCSS, dengan tampilan neobrutalism dan arsitektur Blade Component.

## Fitur
- Tambah, edit, hapus, dan centang todo
- Tampilan modern neobrutalism (tombol, checkbox, dsb)
- Menggunakan Blade Component untuk form dan item todo
- Tidak membutuhkan autentikasi (siap pakai)

## Instalasi

1. **Clone repository & install dependency**
   ```bash
   git clone <repo-url>
   cd latihanlaravel
   composer install
   npm install
   ```

2. **Setup environment**
   - Copy file `.env.example` ke `.env` dan sesuaikan konfigurasi database PostgreSQL:
     ```env
     DB_CONNECTION=pgsql
     DB_HOST=127.0.0.1
     DB_PORT=5432
     DB_DATABASE=latihanlaravel
     DB_USERNAME=postgres
     DB_PASSWORD=
     ```
   - Generate app key:
     ```bash
     php artisan key:generate
     ```

3. **Buat database**
   - Buat database `latihanlaravel` di PostgreSQL (misal via DBeaver/pgAdmin/CLI):
     ```sql
     CREATE DATABASE latihanlaravel;
     ```

4. **Jalankan migrasi**
   ```bash
   php artisan migrate
   ```

5. **Jalankan aplikasi**
   - Jalankan backend Laravel:
     ```bash
     php artisan serve
     ```
   - Jalankan Vite (untuk Tailwind):
     ```bash
     npm run dev
     ```

6. **Akses aplikasi**
   - Buka browser ke: [http://127.0.0.1:8000/todos](http://127.0.0.1:8000/todos)

## Struktur Utama
- `app/Http/Controllers/TodoController.php` — logika CRUD todo
- `app/Models/Todo.php` — model todo
- `database/migrations/2024_05_10_000000_create_todos_table.php` — migrasi tabel todos
- `resources/views/todos/index.blade.php` — tampilan utama, menggunakan komponen
- `resources/views/components/todo-form.blade.php` — Blade component form tambah todo
- `resources/views/components/todo-item.blade.php` — Blade component satu item todo
- `app/View/Components/TodoForm.php` — class komponen form
- `app/View/Components/TodoItem.php` — class komponen item
- `app/Providers/AppServiceProvider.php` — registrasi Blade component

## Style Neobrutalism
- Tombol dan checkbox menggunakan warna solid, border tebal, shadow tebal, dan animasi hover/active khas neobrutalism.
- Komponen Blade memudahkan modifikasi tampilan dan logika.

