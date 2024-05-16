# 📰 Article CRUD Project

Ini adalah project CRUD sederhana menggunakan bahasa pemrograman PHP yang terintegrasi dengan Database MySQL bertujuan untuk mengelola artikel. Aplikasi ini memungkinkan pengguna untuk menambahkan, mengedit, dan menghapus artikel, serta melihat detail dari masing-masing artikel.

## 📝 Project Structure
```
project/
│
├── config/
│ └── connection.php
│
├── css/
│ ├── sb-admin-2.css
│ └── sb-admin-2.min.css
│
├── database/
│ └── article.sql
│
├── img/
│ ├── article.png
│ ├── hadiiyok.jpg
│ ├── undraw_posting_photo.svg
│ ├── undraw_profile_1.svg
│ ├── undraw_profile_2.svg
│ ├── undraw_profile_3.svg
│ ├── undraw_profile.svg
│ └── undraw_rocket.svg
│
├── js/
│ ├── demo/
│ │ ├── chart-area-demo.js
│ │ ├── chart-bar-demo.js
│ │ ├── chart-pie-demo.js
│ │ └── datatables-demo.js
│ ├── sb-admin-2.js
│ └── sb-admin-2.min.js
│
└── pages/
│ ├── add_artikel.php
│ ├── delete_artikel.php
│ ├── detail_artikel.php
│ └── edit_artikel.php
│
└── public/
│
└── vendor/
│
└── index.php
```
## 🌟 Features

- CRUD operations for managing articles.
- Responsive UI design using Bootstrap.
- Image upload for article thumbnails.
- Categorized articles for easy navigation.

## 📂 File Descriptions

### `config/connection.php`
File ini berisi pengaturan koneksi database MySQL.
### `css/`
Direktori ini berisi file CSS untuk memperindah tampilan aplikasi.
### `database/article.sql`
File SQL ini berisi skema database untuk artikel-artikel.
### `img/`
Direktori ini berisi gambar yang digunakan dalam aplikasi, seperti gambar mini artikel dan ikon.
### `js/`
Direktori ini berisi file JavaScript untuk meningkatkan pengalaman pengguna, seperti tabel data dan grafik.
### `pages/`
Direktori ini berisi file PHP untuk halaman-halaman berbeda dalam aplikasi, termasuk menambah, menghapus, mengedit, dan menampilkan artikel-artikel.
### `public/`
Direktori `public/` berisi file-file yang dapat diakses secara langsung oleh pengguna melalui web server. Ini termasuk gambar, file JavaScript, file CSS, dan file-file lain yang diperlukan untuk tampilan dan fungsionalitas aplikasi.
### `vendor/`
Direktori `vendor/` berisi semua dependensi pihak ketiga yang digunakan dalam proyek ini. Ini biasanya termasuk framework PHP, perpustakaan, atau paket lain yang diinstal melalui manajer paket seperti Composer.
### `index.php`
File `index.php` adalah file utama dalam aplikasi ini. Berikut adalah fungsionalitas utama yang dimiliki file ini:
- Memuat halaman utama aplikasi.
- Menampilkan daftar artikel dengan fungsi CRUD (Create, Read, Update, Delete).
- Menghubungkan ke database MySQL menggunakan file `config/connection.php`.
- Menggunakan file CSS dari direktori `css/` untuk memperindah tampilan aplikasi.
- Menggunakan file JavaScript dari direktori `js/` untuk meningkatkan pengalaman pengguna.

## 🤝 Contributing

If you'd like to contribute to this project, please follow these steps:
1. Fork this repository.
2. Create a new branch (`git checkout -b new-feature`).
3. Make the necessary changes.
4. Commit your changes (`git commit -am 'Add new feature'`).
5. Push to your branch (`git push origin new-feature`).
6. Create a new Pull Request.

## 📜 License 
Project ini bersifat open-source dan tersedia di bawah [MIT License](LICENSE).

## 👤 Author
- **Hadi Prasetiyo** - [hadiiyok](https://github.com/hadiprasetiyo)
