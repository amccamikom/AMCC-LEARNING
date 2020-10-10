<p align="center"><img src="https://amcc.or.id/themes/amcc-v2/assets/images/amcc-logo.png" width="150"></p>


## Persyaratan
Project ini memerlukan persyaratan berikut untuk dipenuhi:
- [Composer](https://getcomposer.org)
- [Git](https://git-scm.com) (untuk pengembangan)
- PHP 7.2+


## Persiapan untuk pengembangan lokal
Setelah persyaratan diatas telah terpenuhi, kamu dapat mengikuti langkah berikut:
1. Klon repositori ini ke lokal
```
$ git clone https://github.com/amccamikom/AMCC-LEARNING.git
```

2. Buka command prompt / terminal dan arahkan ke direktori hasil klon.
```
$ cd AMCC-LEARNING/
```

3. Instal semua dependensi yang dibutuhkan.
```
$ composer install
```

4. Buat file konfigurasi .env dari template yang disediakan.
```
$ cp .env.example .env
```

5. Siapkan database baru di DBMS masing-masing, lalu atur di .env.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

6. Set app key dan jalankan migration serta seeder.
```
$ php artisan key:generate
$ php artisan migrate
$ php artisan db:seed
```

7. Persiapan selesai! kamu bisa lanjut mengkonfigurasi web server atau bisa langsung menjalankan server pengembangan bawaan PHP.
```
$ php artisan serve
```