# Project Structure and Verification

## Academic implementation

The repository contains the Laravel/PHP application, Blade views, routes, controllers, models, validation requests, data-access repositories, migration files, and frontend assets.

## Development workflow

- **Application:** Laravel 8, PHP and Composer
- **Database:** MySQL with migration files in `database/migrations/`
- **Frontend:** Blade, CSS, JavaScript and Bootstrap
- **Configuration:** `.env.example`, `config/` and `composer.lock`
- **Quality automation:** GitHub Actions

## Automated checks

| Check | Workflow |
| --- | --- |
| PHP source syntax | [PHP source syntax](../.github/workflows/php-syntax.yml) |
| Framework initialization, migrations and route registration | [Laravel smoke test](../.github/workflows/laravel-smoke.yml) |

[GitHub Actions results](https://github.com/nabilaislam11/advanced-school-management-system/actions)

## Run locally

Follow the [local development guide](local-development.md) for dependency installation, MySQL configuration, schema migrations, frontend build and application launch.
