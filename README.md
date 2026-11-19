# Advanced School Management System

A web-based school administration system built with **Laravel 8, PHP, MySQL, Blade, Bootstrap, and JavaScript**. The project brings together student information, academic organization, class schedules, and user management in a structured web application.

## Overview

The system is organized around common school administration workflows, with separate application components for student records, academic classes, sections, subjects, timetables, and user accounts.

## Key modules

- **Student management:** Student profiles, admission records, class assignments, and record administration
- **Academic organization:** Class, section, and subject management
- **Timetables:** Scheduling interfaces and timetable records
- **User accounts:** Authentication, profile management, and role-aware access
- **Administration:** Dedicated controllers, validation, and structured application routes

## Technology stack

| Layer | Technologies |
| --- | --- |
| Backend | PHP, Laravel 8 |
| Frontend | Blade templates, Bootstrap, JavaScript, CSS |
| Database | MySQL |
| Development tools | Composer, Artisan, GitHub Actions |

## Project structure

| Directory | Contents |
| --- | --- |
| `app/Http/Controllers/` | Request handling and application modules |
| `app/Models/` | Eloquent data models |
| `app/Repositories/` | Data-access and query logic |
| `app/Http/Requests/` | Form request validation |
| `routes/` | Web and API routes |
| `resources/views/` | Blade templates |
| `public/` | Stylesheets, scripts, and other frontend assets |
| `database/` | Migrations and seeders |
| `.github/workflows/` | Automated PHP and Laravel checks |

## Local setup

Refer to [local development instructions](docs/local-development.md) for environment configuration, dependency installation, database setup, and Artisan commands.

The repository includes an `.env.example` template. Configure your own development environment and keep credentials out of version control.

## Quality checks

GitHub Actions runs PHP syntax validation and a Laravel smoke test covering dependency installation, application initialization, database migrations, and route registration.

## Project focus

The application demonstrates Laravel's MVC structure, Eloquent models, server-rendered interfaces, route organization, request validation, and relational data modeling in a school administration context.
