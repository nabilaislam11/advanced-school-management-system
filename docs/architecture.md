# Application architecture

This repository preserves source from an academic school management application built with PHP and Laravel 8.

## Application layers

- `routes/web.php`: authenticated and role-restricted HTTP routes
- `app/Http/Controllers/`: request handling and administrative workflows
- `app/Repositories/`: domain queries and persistence operations
- `app/Models/` and `app/User.php`: Eloquent data entities and relationships
- `resources/views/`: Blade presentation templates in the original application
- `config/`: Laravel service and database configuration

## Domain relationships

Student records associate users with classes, sections, parents and dormitories. Classes contain sections and student records. Timetables connect time slots, timetable records and subjects.

## Scope and validation

This is an academic source-preservation project. The available original source has unresolved controller/model references and lacks project database migrations; runtime functionality has not been verified. The current repository import is in progress and does not yet include all original source files.
