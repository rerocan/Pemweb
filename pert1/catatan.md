**Pemweb Pertemuan 1**

membahas tentang apa itu websiite dan apa fungsi website.

### apa itu website
Website (situs web) adalah kumpulan halaman digital yang saling terhubung, berisi teks, gambar, video, atau konten lainnya, yang dapat diakses melalui internet menggunakan browser (seperti Chrome, Firefox, atau Safari). Setiap website memiliki alamat unik yang disebut URL (Contoh: www.namawebsite.com).

### Komponen Utama Website

#### Domain Name
Nama unik yang menjadi alamat website (Contoh: google.com, instagram.com).
Analogi: Seperti "alamat rumah" di dunia digital.

#### Hosting

Tempat penyimpanan data website (file, gambar, kode program) di server yang terhubung ke internet.
Analogi: Seperti "tanah" tempat rumah (website) dibangun.

#### Halaman Web (Web Pages)

Dokumen individual yang ditulis dalam bahasa pemrograman (HTML, CSS, JavaScript) dan ditampilkan di browser.
Contoh: Halaman beranda (homepage), halaman kontak, atau halaman produk.

<br><br>

melakukan praktek coding yaitu membuat file sample app beserta isinya secara manual mencakup nginx, php, db, docke-compose.yml, .env nya
berikut adalah hal yang di buat :

### nginx.conf
nginx.conf adalah file konfigurasi utama untuk server web Nginx. Strukturnya menggunakan directives (pengaturan) dan blocks (blok konfigurasi) dalam format teks.

    server {
        listen 80;
        server_name localhost;

    location / {
        root /usr/share/nginx/html;
        index index.html;
    }

}

### docker-compose.yml
docker-compose.yml adalah file konfigurasi YAML untuk mengatur dan menjalankan aplikasi multi-container dengan Docker Compose. File ini memungkinkan Anda mendefinisikan layanan, jaringan, volume, dan dependensi antar-container secara terpusat.

    version : '3'

    services:

    web:
        image: nginx:latest
        ports:
            - 80:80
        volumes:
            - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf-

### .env
File .env (environment file) adalah file teks yang digunakan untuk menyimpan variabel lingkungan (environment variables) dalam bentuk key-value pairs.
Variabel ini berisi konfigurasi atau data sensitif yang diperlukan aplikasi untuk berjalan di lingkungan tertentu (development, production, dll).

    COMPOSE_PRJECT_NAME = esgul
    REPOSITORY_NAME = Pemweb
    IMAGE_TAG = latest

setelah itu yang di lakukan berikutnnya adalah menambahkan index html di dalam docker-compose.yml yaitu :

    - ./src/index.html:/usr/share/nginx/html
Berfungsi untuk memetakan file index.html yang ada di komputer lokal (host) ke dalam direktori /usr/share/nginx/html di dalam container Nginx. Tujuannya adalah agar file tersebut dilayani sebagai halaman web oleh Nginx, yang merupakan web server di dalam container.

setelah itu yang di lakukan adalah membuild dockernya menggunakan command:

    docker-compose up -d

docker-compose up -d berfungsi untuk  menjalankan container Docker yang telah didefinisikan dalam file docker-compose.yml, dengan mode detached (berjalan di latar belakang/background).

lalu kita menambahkan index.html di folder src :

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

    </body>
    </html>

penjelasan index.html :

File index.html adalah dokumen HTML dasar yang menggunakan standar HTML5. File ini memiliki metadata seperti encoding karakter UTF-8 untuk mendukung berbagai bahasa, dan pengaturan responsif melalui tag viewport agar halaman tampil baik di semua perangkat. Bagian <body> masih kosong, sehingga halaman yang ditampilkan akan kosong. Ketika file ini dipetakan ke container Nginx, Nginx akan melayani file tersebut sebagai halaman utama. File ini berfungsi sebagai template awal yang dapat dikembangkan lebih lanjut untuk menampilkan konten web.

---

Berikut adalah tabel yang Anda berikan dalam format **Markdown**:

---

### **Tag Table HTML**

Berikut adalah beberapa tag HTML yang sering digunakan dalam pengembangan web:

| Tag HTML            | Fungsi/Penjelasan                                                                 |
|---------------------|-----------------------------------------------------------------------------------|
| `<!DOCTYPE html>`   | Menentukan jenis dokumen sebagai HTML5.                                           |
| `<html>`            | Element root dari dokumen HTML.                                                   |
| `<head>`            | Berisi metadata seperti judul halaman, charset, dan link ke file eksternal.       |
| `<title>`           | Menentukan judul halaman yang tampil di tab browser.                              |
| `<meta>`            | Menyediakan informasi metadata seperti charset, deskripsi, dan kata kunci.       |
| `<link>`            | Menghubungkan dokumen HTML dengan file eksternal (CSS, favicon, dll).             |
| `<style>`           | Menambahkan gaya (CSS) langsung di dalam dokumen HTML.                            |
| `<body>`            | Berisi konten utama yang ditampilkan di browser.                                  |
| `<header>`          | Menentukan bagian header dari halaman atau bagian dokumen.                        |
| `<nav>`             | Digunakan untuk membungkus tautan navigasi.                                       |
| `<main>`            | Menandai konten utama dari dokumen HTML.                                          |
| `<section>`         | Menentukan bagian (section) dalam dokumen.                                        |
| `<article>`         | Mendefinisikan konten independen seperti artikel atau post.                       |
| `<footer>`          | Menentukan footer dari halaman atau bagian dokumen.                               |
| `<h1>` hingga `<h6>`| Heading untuk judul dan subjudul, dari yang terbesar (`<h1>`) hingga terkecil (`<h6>`). |
| `<p>`               | Menentukan paragraf teks.                                                         |

---

