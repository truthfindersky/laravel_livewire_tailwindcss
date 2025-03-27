<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About this Project

This project was built using Laravel 12, Livewire 3.6, and tailwindcss 3.1.0 to create a dynamic and interactive web application.

### Scaffolding

```bash
composer create-project laravel/laravel .
composer require laravel/breeze --dev
php artisan breeze:install blade
composer require livewire/livewire
npm install
npm run dev
php artisan serve
http://127.0.0.1:8000/
```

### config/livewire.php

```bash
php artisan livewire:publish --config

remove
'layout' => 'components.layouts.app',
add
'layout' => 'layouts.app',
```

### resources/views/layouts/app.blade.php

```bash
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        //
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        //
        @livewireScripts
    </body>
</html>
```
### Migration

```bash
php artisan migrate --seed
```
### Login
![Dashboard Screenshot](public/assets/images/screenshots/login.png)

### Products
![Dashboard Screenshot](public/assets/images/screenshots/product.png)

### Github

```bash
If you download this project from Github

composer install
npm install
connect database to .env
php artisan key:generate
php artisan storage:link
php artisan migrate --seed
npm run dev
php artisan serve
```

