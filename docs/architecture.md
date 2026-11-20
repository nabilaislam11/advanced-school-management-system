# Advanced School Management System — Architecture

A Laravel 8 school administration application combining student management, academic organization, user roles, and timetable scheduling.

## Application architecture

| Layer | Source | Responsibility |
| --- | --- | --- |
| HTTP routes | `routes/web.php` and `routes/api.php` | Request routing and access policies |
| Controllers | `app/Http/Controllers/` | School administration and user workflows |
| Form requests | `app/Http/Requests/` | Validation of student, subject, class and timetable data |
| Domain models | `app/Models/` and `app/User.php` | Eloquent entities and relationships |
| Repositories | `app/Repositories/` | Data-access and domain queries |
| Views | `resources/views/` | Blade-based web interface |
| Database | `database/migrations/` | Local-development database schema |
| Build assets | `resources/` and `public/` | Frontend styles, scripts and compiled assets |

## Academic workflows

1. **User access:** Login, account management and role-based application sections.
2. **Student management:** Create and maintain student records associated with class and section assignments.
3. **Academic structure:** Define classes, sections and subjects.
4. **Timetable management:** Configure time slots, create timetables and manage timetable records.
5. **Administration:** School settings, users and supporting records.

## Data model

The application represents students, classes, sections, subjects, time slots and timetables with Laravel Eloquent models and supporting repositories. Local migrations for the school data model are included in `database/migrations/`.

## Development and checks

The [local development guide](local-development.md) covers the Laravel and MySQL setup. GitHub Actions checks PHP syntax, installs locked dependencies, applies the migrations to a fresh MySQL database and lists the application routes. See [project checks](quality-checks.md).
