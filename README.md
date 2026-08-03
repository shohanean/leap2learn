<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Leap2Learn

A Laravel 12 starter project pre-configured with authentication, permissions, and a handful of commonly needed packages.

## Table of Contents

- [Requirements](#requirements)
- [Packages](#packages)
- [Getting Started](#getting-started)
- [Tools Used](#tools-used)
- [Contributing](#contributing)
- [License](#license)

## Requirements

- PHP ^8.2
- Composer

## Packages

| Package | Purpose |
| --- | --- |
| [laravolt/avatar](https://github.com/laravolt/avatar) | Avatar generator |
| [kwn/number-to-words](https://github.com/kwn/number-to-words) | Number to words converter |
| [laravel/sanctum](https://laravel.com/docs/sanctum) | API token authentication |
| [laravel/socialite](https://laravel.com/docs/socialite) | OAuth / social login |
| [spatie/laravel-permission](https://spatie.be/docs/laravel-permission) | Roles and permissions |
| [spatie/laravel-backup](https://spatie.be/docs/laravel-backup) | Application backups |
| [maatwebsite/excel](https://docs.laravel-excel.com) | Excel import/export |
| [anhskohbo/no-captcha](https://github.com/anhskohbo/no-captcha) | Google reCAPTCHA integration |

## Getting Started

1. Clone the repository:
   ```bash
   git clone <repository_url>
   ```
2. Install [Composer](https://getcomposer.org/download/) dependencies:
   ```bash
   composer update
   ```
3. Copy the environment file:
   ```bash
   cp .env.example .env
   ```
4. Generate the application key:
   ```bash
   php artisan key:generate
   ```
5. Configure your database credentials in `.env`.
6. Run migrations:
   ```bash
   php artisan migrate
   ```
7. Seed the database:
   ```bash
   php artisan db:seed
   ```
8. Serve the application:
   ```bash
   php artisan serve
   ```

## Tools Used

- [Laravel Livewire](https://laravel-livewire.com/)
- [Alpine.js](https://alpinejs.dev/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
