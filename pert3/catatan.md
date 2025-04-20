# Panduan Instalasi Laravel dan Livewire dengan Docker

## 1. Konfigurasi Awal Docker Compose

Langkah pertama adalah menyiapkan file `docker-compose.yml` dengan konfigurasi berikut:

```yml
services:
  pemweb:
    build: ./php
    image: pemweb_php:latest
    container_name: pemweb
    hostname: "pemweb"
    volumes:
      - ./src:/var/www/html
      - ./php/www.conf:/usr/local/etc/php-fpm.d/www.conf
    working_dir: /var/www/html
    depends_on:
      - db_pemweb
      
  db_pemweb:
    image: mariadb:10.2
    container_name: db_pemweb
    restart: unless-stopped
    tty: true
    ports:
      - "13306:3306"
    volumes:
      - ./db/data:/var/lib/mysql
      - ./db/conf.d:/etc/mysql/conf.d:ro
    environment:
      MYSQL_USER: djambred
      MYSQL_PASSWORD: p455w0rd1!.
      MYSQL_ROOT_PASSWORD: p455w0rd
      TZ: Asia/Jakarta
      SERVICE_TAGS: dev
      SERVICE_NAME: mysql_pemweb
      
  nginx_pemweb:
    build: ./nginx
    image: nginx_pemweb:latest
    container_name: nginx_pemweb
    hostname: "nginx_pemweb"
    ports:
      - "80:80"
    volumes:
      - ./src:/var/www/html
      - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf
    depends_on:
      - pemweb
```

**Jalankan perintah berikut untuk build dan menjalankan container:**
```bash
docker compose up -d --build
```

## 2. Instalasi Laravel

**Masuk ke dalam container aplikasi:**
```bash
docker exec -it pemweb bash
```

**Buat proyek Laravel menggunakan starter kit:**
```bash
composer create-project --prefer-dist raugadh/fila-starter .
```

**Atur file `.env`:**
```ini
APP_NAME="PemWeb"
APP_URL=http://localhost
ASSET_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=db_pemweb
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=p455w0rd
```

**Lakukan konfigurasi awal:**
```bash
php artisan key:generate
php artisan storage:link
```

**Migrasi dan seed database:**
```bash
php artisan migrate
php artisan migrate:fresh
```

**Setup tambahan:**
```bash
php artisan shield:generate --all
php artisan db:seed --force
php artisan project:init
```

**Berikan hak akses:**
```bash
chmod 777 -R storage/* && chmod 777 -R bootstrap/*
```

## 3. Menyiapkan Livewire

### Struktur Direktori

1. **Folder Public:**
   ```
   public/
   ├── front/
   │   ├── css/
   │   ├── images/
   │   │   └── Phone-theme.jpg
   │   ├── js/
   │   └── plugins/
   ```

2. **Folder Resources:**
   ```
   resources/
   ├── views/
   │   ├── components/
   │   │   └── layouts/
   │   │       └── app.blade.php
   │   ├── livewire/
   │   │   └── show-home-page.blade.php
   │   └── welcome.blade.php
   ```

### Template Blade Utama

```html
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    ...
</head>
<body>
    <!-- Header -->
    <header class="navigation bg-tertiary">
        ...
    </header>

    {{ $slot }}

    <!-- Footer -->
    <footer class="section-sm bg-tertiary">
        ...
    </footer>

    <!-- Scripts -->
    ...
</body>
</html>
```

### Komponen Livewire

**ShowHomePage.php:**
```php
<?php

namespace App\Livewire;

use Livewire\Component;

class ShowHomePage extends Component
{
    public function render()
    {
        return view('livewire.show-home-page');
    }
}
```

**show-home-page.blade.php:**
```php
<main>
    ...
</main>
```

### Routing Aplikasi

**routes/web.php:**
```php
<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ShowHomePage;

Route::get('/', ShowHomePage::class)->name('home');
```

## Gambaran Struktur Proyek

```
project/
├── docker-compose.yml
├── src/
│   ├── app/
│   │   ├── Livewire/
│   │   │   └── ShowHomePage.php
│   ├── public/
│   │   ├── front/
│   ├── resources/
│   │   ├── views/
│   │   │   ├── components/
│   │   │   │   └── layouts/
│   │   │   ├── livewire/
│   │   │   └── welcome.blade.php
│   ├── routes/
│   │   └── web.php
```