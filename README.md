# 🎓 Sistem Manajemen Data Siswa

<div align="center">

### Tugas Laravel 10

**Rifqi Maulana Yusup**
**XII PPLG 3**

![Laravel](https://img.shields.io/badge/Laravel-10-FF2D20?style=for-the-badge\&logo=laravel\&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge\&logo=php\&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge\&logo=mysql\&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?style=for-the-badge\&logo=bootstrap\&logoColor=white)

</div>

---

## 📌 Tentang Project

**Sistem Manajemen Data Siswa** adalah project sederhana berbasis **Laravel 10** yang dibuat untuk memenuhi tugas pembelajaran Laravel.

Project ini digunakan untuk mengelola data siswa secara sederhana melalui fitur **CRUD (Create, Read, Update, Delete)**.

---

## ✨ Fitur

* 📋 Menampilkan data siswa
* ➕ Menambahkan data siswa
* ✏️ Mengedit data siswa
* 🗑️ Menghapus data siswa
* 🔎 Mencari data siswa
* 🎓 Menyimpan data kelas
* 🪪 Menyimpan data NISN
* 📱 Tampilan responsive menggunakan Bootstrap

---

## 🛠️ Teknologi yang Digunakan

| Teknologi        | Keterangan                |
| ---------------- | ------------------------- |
| **Laravel 10**   | Framework utama           |
| **PHP**          | Bahasa pemrograman        |
| **MySQL**        | Database                  |
| **Bootstrap 5**  | Styling dan responsive UI |
| **Blade**        | Template engine Laravel   |
| **Git & GitHub** | Version control           |

---

## 📂 Struktur Project

```text
sekolah/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   └── Models/
│
├── database/
│   ├── migrations/
│   └── seeders/
│
├── resources/
│   └── views/
│       └── siswa/
│           ├── index.blade.php
│           ├── create.blade.php
│           └── edit.blade.php
│
├── routes/
│   └── web.php
│
└── README.md
```

---

## 🧑‍💻 Data Siswa

Data yang dikelola dalam sistem terdiri dari:

* **Nama Siswa**
* **Kelas**
* **NISN**

---

## 🚀 Cara Menjalankan Project

Clone repository:

```bash
git clone https://github.com/rifqimaull47/Laravel_sekolah_10.git
```

Masuk ke folder project:

```bash
cd Laravel_sekolah_10
```

Install dependency:

```bash
composer install
```

Copy file environment:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

Sesuaikan konfigurasi database pada file `.env`, kemudian jalankan:

```bash
php artisan migrate
```

Jalankan server Laravel:

```bash
php artisan serve
```

Buka:

```text
http://127.0.0.1:8000
```

---

## 👨‍🎓 Identitas Pembuat

**Nama:** Rifqi Maulana Yusup
**Kelas:** XII PPLG 3
**Project:** Tugas Laravel 10

---

<div align="center">

### Made with using Laravel 10

**Rifqi Maulana Yusup — XII PPLG 3**

</div>
