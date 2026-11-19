# Advanced School Management System

**Academic project | Laravel 8 · PHP · Blade · Bootstrap · JavaScript · MySQL**

A school administration application developed as an academic software project. This repository organizes and preserves the available original Laravel application source, its frontend dependencies, and supporting documentation.

**Portfolio restoration status: Complete.** The available source has been restored and organized for archival and academic review. This designation does **not** mean every original application feature is operational or that the application has passed end-to-end testing.

## Project scope

The available source includes modules for student records, user accounts, classes, sections, subjects, timetables, and role-based administration. The original route definitions also reference additional modules, including promotions, payments, examinations, marks, and PINs. Some of those controllers are absent from the preserved source and their routes are conditionally registered to avoid resolving nonexistent classes.

## Technology stack

- **Backend:** PHP and Laravel 8
- **Frontend:** Laravel Blade, Bootstrap, JavaScript, and CSS
- **Database:** MySQL, with development migrations reconstructed from the available models
- **Validation:** GitHub Actions for PHP syntax and Laravel installation/database/route smoke checks

## Repository structure

| Path | Purpose |
| --- | --- |
| `app/` | Application controllers, models, and backend logic |
| `routes/` | Application route definitions |
| `resources/views/` | Blade templates |
| `public/` | Original frontend assets |
| `database/migrations/` | Reconstructed development database baseline |
| `docs/local-development.md` | Local installation and smoke-test instructions |
| `docs/restoration-verification.md` | Restoration record and verification limitations |
| `tools/audit-route-controllers.php` | Inventory of referenced controller names |
| `.github/workflows/` | Automated source and application checks |

## Getting started

See [local development instructions](docs/local-development.md) for prerequisites, configuration, and commands. Use `.env.example` as the starting point for a **local** environment. Never commit secrets or actual student records.

## Verification and scope

PHP syntax checks have passed. Previous GitHub Actions logs showed successful Composer installation and reconstructed database migration, followed by a route-registration failure involving a missing original controller. Conditional registration for unavailable modules has since been committed, but a successful subsequent route-registration run has **not yet been confirmed**.

This is an **academic source restoration and portfolio archive**, not a production deployment. The reconstructed schema and available modules may require additional development to support full end-to-end functionality. The repository makes no claim that missing original modules were implemented or tested.

## Academic portfolio note

This repository documents an earlier academic software project and the source material available for it. Its purpose is to make the project's structure, technical scope, and implementation evidence accessible for review.
