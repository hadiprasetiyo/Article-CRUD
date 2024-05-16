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
│ ├── styles.css
│ └── styles.min.css
│
├── database/
│ └── article.sql
│
├── img/
│ ├── profile_picture.jpg
│ ├── favicon.ico
│ └── undraw_image.svg
│
├── js/
│ ├── chart.js
│ └── datatables.js
│
└── pages/
│ ├── add_artikel.php
│ ├── delete_artikel.php
│ ├── detail_artikel.php
│ └── edit_artikel.php
└── index.php
```
## 🤝 Contributing

If you'd like to contribute to this project, please follow these steps:
1. Fork this repository.
2. Create a new branch (`git checkout -b new-feature`).
3. Make the necessary changes.
4. Commit your changes (`git commit -am 'Add new feature'`).
5. Push to your branch (`git push origin new-feature`).
6. Create a new Pull Request.

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
### `index.php`
File `index.php` adalah file utama dalam aplikasi ini. Berikut adalah fungsionalitas utama yang dimiliki file ini:
- Memuat halaman utama aplikasi.
- Menampilkan daftar artikel dengan fungsi CRUD (Create, Read, Update, Delete).
- Menghubungkan ke database MySQL menggunakan file `config/connection.php`.
- Menggunakan file CSS dari direktori `css/` untuk memperindah tampilan aplikasi.
- Menggunakan file JavaScript dari direktori `js/` untuk meningkatkan pengalaman pengguna.

## 📜 License 
Project ini bersifat open-source dan tersedia di bawah [MIT License](LICENSE).

## 👤 Author
- **Hadi Prasetiyo** - [hadiiyok](https://github.com/hadiprasetiyo)
