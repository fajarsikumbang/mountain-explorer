```markdown
# Mountain Explorer

Mountain Explorer adalah aplikasi berbasis web yang memungkinkan pengguna untuk menjelajahi berbagai gunung di seluruh dunia. Aplikasi ini dibangun dengan **React** di frontend dan **Laravel** di backend, dan menggunakan **OpenWeather API** untuk menampilkan data cuaca terkini di setiap gunung.

## Fitur
- Menampilkan daftar gunung.
- Menampilkan detail gunung, termasuk nama, lokasi, ketinggian, dan deskripsi.
- Menampilkan peta interaktif dari lokasi gunung.
- Menampilkan informasi cuaca terkini berdasarkan lokasi gunung.

## Teknologi
- **Frontend**: React.js
- **Backend**: Laravel
- **Peta**: Leaflet.js / Mapbox
- **Cuaca**: OpenWeather API
- **Styling**: Tailwind CSS

## Prasyarat
Sebelum memulai, pastikan Anda sudah memiliki hal-hal berikut:
- **Node.js** (v14 ke atas)
- **Composer** (untuk Laravel)
- **PHP** (v8.0 ke atas)
- **MySQL** atau **SQLite** (tergantung pengaturan Laravel)
- **API Key dari OpenWeather** (untuk mendapatkan data cuaca)

## Instalasi

### 1. Menginstal Backend (Laravel)

1. **Clone Repositori Backend**:
   ```bash
   git clone https://github.com/username/mountain-explorer-backend.git
   cd mountain-explorer-backend
   ```

2. **Install Dependensi**:
   Pastikan sudah menginstal dependensi yang dibutuhkan oleh Laravel:
   ```bash
   composer install
   ```

3. **Konfigurasi Environment**:
   Salin file `.env.example` menjadi `.env` dan sesuaikan pengaturan database dan API Key untuk OpenWeather:
   ```bash
   cp .env.example .env
   ```

4. **Generate Key Laravel**:
   Jalankan perintah berikut untuk membuat key aplikasi Laravel:
   ```bash
   php artisan key:generate
   ```

5. **Migrasi Database**:
   Jika aplikasi membutuhkan database, jalankan migrasi untuk membuat tabel yang diperlukan:
   ```bash
   php artisan migrate
   ```

6. **Jalankan Laravel**:
   Setelah semua siap, jalankan backend Laravel:
   ```bash
   php artisan serve
   ```

   Backend akan berjalan di `http://127.0.0.1:8000`.

### 2. Menginstal Frontend (React)

1. **Clone Repositori Frontend**:
   ```bash
   git clone https://github.com/username/mountain-explorer-frontend.git
   cd mountain-explorer-frontend
   ```

2. **Install Dependensi**:
   Install dependensi yang dibutuhkan oleh React:
   ```bash
   npm install
   ```

3. **Jalankan React**:
   Setelah itu, jalankan frontend React:
   ```bash
   npm start
   ```

   Frontend akan berjalan di `http://localhost:3000`.

### 3. Konfigurasi CORS di Backend (Laravel)

Pastikan backend Laravel diatur agar dapat diakses oleh frontend yang berjalan di port yang berbeda. Install **CORS** di Laravel:
```bash
composer require fruitcake/laravel-cors
```

Sesuaikan konfigurasi CORS di `config/cors.php`:
```php
'allowed_origins' => ['http://localhost:3000'],
```

### 4. API Key OpenWeather

Untuk mendapatkan data cuaca, kamu membutuhkan API Key dari OpenWeather. Dapatkan API Key dari [OpenWeather](https://openweathermap.org/api) dan masukkan di file `.env` Laravel dengan variabel `OPENWEATHER_API_KEY`.

### 5. Menjalankan Aplikasi

- **Backend**: `http://127.0.0.1:8000` (Laravel)
- **Frontend**: `http://localhost:3000` (React)

Kamu bisa mengakses aplikasi di browser setelah menjalankan kedua server.

## Struktur Direktori

```
├── backend/
│   ├── app/
│   ├── config/
│   ├── database/
│   ├── public/
│   ├── resources/
│   ├── routes/
│   ├── .env
│   ├── artisan
│   └── composer.json
└── frontend/
    ├── src/
    ├── public/
    ├── package.json
    ├── .env
    └── node_modules/
```

## Pengembangan Lebih Lanjut

- **Tambah Fitur Pencarian Gunung**: Implementasikan pencarian gunung berdasarkan nama.
- **Fitur Login dan Registrasi**: Tambahkan fitur login pengguna dengan menggunakan token autentikasi.
- **Penyimpanan Data Cuaca**: Simpan data cuaca yang diperoleh ke database untuk referensi lebih lanjut.
- **Desain UI/UX**: Perbaiki desain UI dengan tambahan animasi dan pengaturan responsivitas.

## Kontribusi

Jika kamu ingin berkontribusi pada proyek ini, silakan fork repositori ini dan ajukan pull request. Pastikan untuk mengikuti pedoman kontribusi yang berlaku.

## Lisensi

Aplikasi ini dilisensikan di bawah [MIT License](LICENSE).
```