# Laravel CRUD

Project ini adalah aplikasi Laravel sederhana untuk melakukan operasi CRUD (Create, Read, Update, Delete) pada data Mahasiswa.

## 📄 Web Routes

| Method | URI                      | Controller / Action             | Keterangan                       |
|--------|---------------------------|----------------------------------|-----------------------------------|
| GET    | `/`                       | (inline view / redirect)        | Halaman utama atau welcome        |
| GET    | `/mahasiswa`              | `MahasiswaController@index`     | Menampilkan semua data mahasiswa |
| GET    | `/mahasiswa/create`       | `MahasiswaController@create`    | Form tambah mahasiswa            |
| POST   | `/mahasiswa`              | `MahasiswaController@store`     | Simpan data mahasiswa            |
| GET    | `/mahasiswa/{id}/edit`    | `MahasiswaController@edit`      | Form edit mahasiswa              |
| PUT    | `/mahasiswa/{id}`         | `MahasiswaController@update`    | Update data mahasiswa            |
| DELETE | `/mahasiswa/{id}`         | `MahasiswaController@destroy`   | Hapus data mahasiswa             |

## 🚀 Menjalankan Proyek

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```




# Laravel CRUD with Auth

Project ini adalah aplikasi Laravel dengan fitur:

- CRUD Mahasiswa dan Kontak
- Otentikasi (Login & Register)
- API endpoint untuk Mahasiswa

## 📄 Web Routes

| Method   | URI                   | Controller / Action         | Keterangan                |
|----------|-----------------------|-----------------------------|---------------------------|
| GET      | `/`                   | -                           | Menampilkan halaman utama |
| Resource | `/mahasiswa`          | MahasiswaController         | CRUD Mahasiswa            |
| GET      | `/mahasiswa/get-data` | MahasiswaController@getData | Data JSON Mahasiswa       |
| Resource | `/kontaks`            | KontakController            | CRUD Kontak               |
| GET/POST | `/register`           | RegisterController          | Registrasi pengguna       |
| GET/POST | `/login`              | LoginController             | Login pengguna            |

## 📡 API Routes

| Method   | URI          | Controller / Action     | Keterangan      |
|----------|--------------|-------------------------|-----------------|
| GET      | `/user`      | Closure + auth:sanctum  | Data user login |
| Resource | `/mahasiswa` | Api\MahasiswaController | API mahasiswa   |

## 🚀 Menjalankan Proyek

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```
