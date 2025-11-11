# Tugas Pemrograman Web

Project tugas pemrograman web menggunakan Laravel dengan fitur login dan tabel data menggunakan Bootstrap.

## Fitur

- Halaman Login
- Dashboard dengan Tabel Data
- UI menggunakan Bootstrap

## Teknologi yang Digunakan

- Laravel
- PHP
- MySQL
- Bootstrap

## Persyaratan Sistem

- PHP >= 8.1
- Composer
- MySQL/PostgreSQL
- Node.js & NPM (jika pakai frontend build tools)

## Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/fawwazking/tugas-pemweb.git
cd tugas-pemweb
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Konfigurasi Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Konfigurasi Database
Edit file `.env` dan sesuaikan dengan database Anda:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Migrasi Database
```bash
php artisan migrate
```

### 6. (Opsional) Seed Database
Jika ada data dummy:
```bash
php artisan db:seed
```

### 7. Compile Assets
```bash
npm run dev
```

### 8. Jalankan Server
```bash
php artisan serve
```

Aplikasi dapat diakses di: `http://localhost:8000`

=


## Struktur Project

```
├── app/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   ├── views/
│   └── js/
├── routes/
│   └── web.php
├── storage/
└── tests/
```

## Troubleshooting

### Error: "No application encryption key has been specified"
```bash
php artisan key:generate
```

### Error Permission di folder storage/
```bash
chmod -R 775 storage bootstrap/cache
```

### Error saat composer install
```bash
composer update
```

## Kontribusi

Jika ini project kolaborasi, jelaskan cara berkontribusi:
1. Fork repository
2. Buat branch baru (`git checkout -b fitur-baru`)
3. Commit perubahan (`git commit -m 'Menambahkan fitur baru'`)
4. Push ke branch (`git push origin fitur-baru`)
5. Buat Pull Request

## Lisensi

MIT License (atau lisensi yang Anda pilih)

## Kontak

Nama Anda - [@username](https://github.com/fawwazking)

Project Link: [https://github.com/fawwazking/tugas-pemweb](https://github.com/fawwazking/tugas-pemweb)

## Catatan

