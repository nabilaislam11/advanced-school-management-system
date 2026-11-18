# Development setup notes

The original application uses Laravel 8, PHP 7.2/8-compatible dependency constraints, and MySQL as the default configured database connection.

1. Install an appropriate PHP/Composer environment and database service.
2. Install PHP dependencies with `composer install`.
3. Create a local `.env` file containing your own development configuration; do not commit credentials.
4. Supply and validate the application database schema before attempting database-backed features.
5. Run application and authentication tests before using the project with real records.

**Current state:** These are preparation notes, not a tested installation procedure. The original source includes unresolved dependencies and is still being imported. Do not deploy this application in production.
