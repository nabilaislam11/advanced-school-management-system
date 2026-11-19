# Local development

This repository contains the academic Laravel 8 application with development migrations based on its models.

## Prerequisites

Use PHP and Composer compatible with the locked dependencies, MySQL, and Node.js/npm.

## Install

```bash
composer install
cp .env.example .env
php artisan key:generate
```

Create a local MySQL database and configure the connection variables in `.env`.

```bash
php artisan migrate
php artisan route:list
npm install
npm run dev
php artisan serve --host=127.0.0.1
```

## Verification

GitHub Actions has successfully completed the installation and database smoke test using an empty MySQL database. This includes installing locked PHP dependencies, executing migrations, and listing registered routes.

The development migrations are derived from the application's models. They serve local project development and are separate from any earlier deployment database.

## Explore the application

With the local environment configured, inspect the login page and the available student, section, class, subject, and timetable flows using test data.
