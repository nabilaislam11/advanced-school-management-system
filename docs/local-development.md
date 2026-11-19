# Local development quick start

This repository preserves an academic Laravel 8 application and includes **reconstructed development migrations**. The migrations were inferred from source models; they do not reproduce a verified original database.

## Prerequisites

Use an isolated local environment with PHP and Composer versions compatible with the locked dependencies, MySQL, and Node.js/npm. Review legacy dependency advisories before exposing the application to any network. Do not deploy this archive to production.

## Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
```

Configure `DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` in your **local** `.env`. Create an empty local MySQL database using those settings. Do not commit `.env` or any credentials.

```bash
php artisan migrate
php artisan route:list
npm install
npm run dev
php artisan serve --host=127.0.0.1
```

The above commands are **instructions, not claimed successful executions**. The migration may require further tables or column adjustments as additional controller and repository dependencies are reviewed. Never run the reconstructed migrations against a database containing valuable data.

## Smoke-test checklist

- PHP syntax workflow passes in GitHub Actions
- Composer dependencies install without errors
- Database migrations succeed on an empty local database
- Routes register without missing classes
- Login page loads without missing assets
- Authentication works with a manually created test account
- Class, section, student, and timetable screens load and perform expected operations
- Browser console and server logs show no application errors

Record actual results before describing the application as runnable or fully tested.

## Security

Use only synthetic test data. Do not use real student records, payment data, employer infrastructure information, or real passwords in this public repository.
