<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel ToDo App

A simple ToDo List application built with Laravel, PostgreSQL, and Tailwind CSS.

---

## Fitur

- CRUD Todo (buat, lihat, edit, hapus)
- Setiap todo memiliki **title** dan **description**
- Tampilkan dan edit description dalam modal pop-up dengan latar belakang blur
- Checkbox untuk menandai todo selesai
- Pagination dengan tampilan custom (background putih)
- Aksi (edit, detail, delete) menggunakan Blade Components
- Ikon tombol menggunakan Font Awesome

---

## Instalasi

1. **Clone repository**
   ```sh
   git clone <repo-url>
   cd latihanlaravel
   ```

2. **Install dependencies**
   ```sh
   composer install
   npm install && npm run dev
   ```

3. **Copy file environment**
   ```sh
   cp .env.example .env
   ```

4. **Atur koneksi database** di file `.env`  
   (Pastikan sudah membuat database PostgreSQL sesuai konfigurasi)

5. **Generate app key**
   ```sh
   php artisan key:generate
   ```

6. **Jalankan migrasi**
   ```sh
   php artisan migrate
   ```

7. **Jalankan server**
   ```sh
   php artisan serve
   ```

---

## Penggunaan

- Tambahkan todo baru melalui form di halaman utama.
- Klik tombol **Detail** (ikon info) untuk melihat deskripsi todo dalam modal pop-up.
- Klik tombol **Edit** (ikon pensil) untuk mengedit todo dalam modal pop-up.
- Klik tombol **Hapus** (ikon trash) untuk menghapus todo.
- Navigasi antar halaman menggunakan pagination di bawah daftar todo.

---

## Kustomisasi

### Pagination
- Pagination sudah di-custom agar memiliki background putih.
- Jika ingin mengubah style, edit file:  
  `resources/views/vendor/pagination/tailwind.blade.php`

### Font Awesome
- Sudah terpasang via CDN di file layout utama (`resources/views/layouts/app.blade.php`).
- Gunakan ikon dengan class Font Awesome di komponen tombol.

### Modal Pop-up
- Modal detail dan edit menggunakan komponen Blade `<x-modal>` dengan efek blur pada latar.

---

## Struktur Komponen Blade

- `resources/views/components/todo-item.blade.php`
- `resources/views/components/todo-actions.blade.php`
- `resources/views/components/todo-delete-button.blade.php`
- `resources/views/components/todo-detail-button.blade.php`
- `resources/views/components/todo-edit-button.blade.php`
- `resources/views/components/todo-detail-section.blade.php`
- `resources/views/components/todo-edit-section.blade.php`
- `resources/views/components/modal.blade.php`

---

## Catatan

- Pastikan parameter `page` selalu dikirim pada tombol aksi detail/edit agar tetap di halaman yang sama saat menggunakan pagination.
- Jangan gunakan method GET untuk aksi hapus, gunakan POST + method spoofing DELETE.

---
