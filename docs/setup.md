# Laravel development setup

The Advanced School Management System is a Laravel 8 application built with PHP, MySQL, Blade templates, and Bootstrap.

## Requirements

Use PHP and Composer versions compatible with `composer.lock`, MySQL, and Node.js/npm for frontend asset compilation.

## Install locally

```bash
composer install
cp .env.example .env
php artisan key:generate
```

Edit the local `.env` to set the database connection. Create a development MySQL database, then run:

```bash
php artisan migrate
php artisan route:list
npm install
npm run dev
php artisan serve --host=127.0.0.1
```

For a more detailed setup, see [Local development](local-development.md).

## Automated verification

GitHub Actions checks PHP source syntax, installs locked Composer dependencies, creates an empty MySQL test database, executes the development migrations, and verifies Laravel route registration.

- [PHP source syntax workflow](../.github/workflows/php-syntax.yml)
- [Laravel installation and database smoke test](../.github/workflows/laravel-smoke.yml)

The development migrations are model-derived for this repository's local setup. They are distinct from a historical production database export.
