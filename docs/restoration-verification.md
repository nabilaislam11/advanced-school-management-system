# Repository source and verification

## Academic application

The repository includes the Laravel application source, Blade views, PHP controllers, models, route definitions, frontend assets, and database-related source files.

## Development support

- Composer dependency definitions and lockfile
- MySQL development migrations for core school, academic, and scheduling tables
- A database seeder entry point
- `.env.example` for local configuration
- Automated source and installation checks

The development migrations were prepared against the application models and are not presented as an original database export.

## GitHub Actions verification

The latest reviewed successful workflows on November 19, 2026 were:

| Workflow | Verified steps | Result |
| --- | --- | --- |
| [PHP source syntax check](https://github.com/nabilaislam11/advanced-school-management-system/actions/runs/44481053511) | PHP source syntax checks | Passed |
| [Laravel installation and database smoke test](https://github.com/nabilaislam11/advanced-school-management-system/actions/runs/44481053430) | Composer install, MySQL migration, route registration | Passed |

## Local development

Follow [Local development](local-development.md) to configure the application and use the development database schema. The automated checks validate installation and basic framework initialization; interactive school-management workflows can be exercised in a local browser.
