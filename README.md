# IdentityHub

<p>
  <img src="https://img.shields.io/badge/Laravel-9.52-FF2D20?style=flat&logo=laravel&logoColor=white" alt="Laravel 9.52">
  <img src="https://img.shields.io/badge/PHP-%5E8.0.2-777BB4?style=flat&logo=php&logoColor=white" alt="PHP ^8.0.2">
  <img src="https://img.shields.io/badge/license-MIT-blue.svg" alt="License: MIT">
</p>

IdentityHub is a bilingual (English/Arabic) personal portfolio and CV website built with Laravel. It has two sides:

- **Public profile page** — a single-page portfolio showing an "About Me" bio, education, work experience, personal/software skills, portfolio businesses/projects (grouped by category), services offered, testimonials, a blog/FAQ section, and a contact form.
- **Admin dashboard** — a password-protected back office where the site owner manages every piece of content above (about info, education, experience, skills, categories, businesses, services, testimonials, blog posts), reviews incoming contact messages, and edits site-wide settings (including social links).

## Key Features

- **Public portfolio page** (`ProfileController`) rendering active About/Education/Experience/Skills/Services/Testimonials/Blog/Business content in one page, with businesses filterable by category.
- **Contact form** (`ContactMeController`) that stores visitor messages (name, email, phone, subject, message) for later review in the admin panel.
- **Admin dashboard** (`HomeController`) with a summary of services and contact messages, including a 7-day activity breakdown.
- **Full CRUD admin management** for:
  - About / bio (`AboutsController`) — includes CV and profile photo uploads
  - Education (`EducationsController`)
  - Experience (`ExperiencesController`)
  - Skills (`SkillsController`) — personal and software skill types, each with a percentage
  - Categories (`CategoriesController`)
  - Businesses / portfolio projects (`BusinessesController`) — linked to a category, with logo and image uploads
  - Services (`ServicesController`) — with logo and detail image uploads
  - Testimonials (`TestimonialsController`)
  - Blog / FAQ entries (`BlogsController`)
- **Active/inactive status toggling** for each content type (`status` endpoints), so content can be hidden from the public page without deleting it.
- **Contact message management** (`ContactsController`) — list and delete submissions from the public contact form.
- **Site settings management** (`SettingsController`) — key/value settings (e.g. social links) grouped and labeled in both languages.
- **Admin account management** (`AdminsController`) — edit admin profile and reset password.
- **Bilingual content model** — most content tables store both `_en` and `_ar` fields (title, description, etc.) so content can be served in English or Arabic.
- **Server-side DataTables** (via `yajra/laravel-datatables-oracle`) powering the admin listing tables.
- **Authentication scaffolding** (via `laravel/ui`) for admin login, registration, and password reset, mounted under the `/adminAuth` prefix.

## Tech Stack

- **Framework:** Laravel v9.52 (`laravel/framework` ^9.19)
- **Language:** PHP ^8.0.2
- **Database:** MySQL (default `DB_CONNECTION=mysql`)
- **Frontend:** Blade templates + Vue 3 (via `laravel-vite-plugin`), Bootstrap 5, Sass, built with Vite
- **Auth:** `laravel/ui` (session-based) and `laravel/sanctum` (API/token auth)
- **Notable packages:**
  - `yajra/laravel-datatables-oracle` — server-side DataTables for admin listings
  - `laravel/sanctum` — API authentication
  - `laravel/tinker` — REPL
  - `guzzlehttp/guzzle` — HTTP client
  - Dev: `laravel/pint`, `laravel/sail`, `phpunit/phpunit`, `fakerphp/faker`, `mockery/mockery`, `spatie/laravel-ignition`

## Requirements

- PHP `^8.0.2` with the extensions Laravel 9 requires (OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON, BCMath, Fileinfo)
- [Composer](https://getcomposer.org/)
- Node.js and npm
- MySQL (or another database supported by Laravel — adjust `DB_CONNECTION` accordingly)

## Installation

1. **Clone the repository**

   ```bash
   git clone https://github.com/AliAlqrinawi/IdentityHub.git
   cd IdentityHub
   ```

2. **Install PHP dependencies**

   ```bash
   composer install
   ```

3. **Copy the environment file**

   ```bash
   cp .env.example .env
   ```

4. **Generate the application key**

   ```bash
   php artisan key:generate
   ```

5. **Configure the database** in `.env` (see [Environment Variables](#environment-variables) below).

6. **Run migrations** (add `--seed` to also create a default admin user and social-link settings):

   ```bash
   php artisan migrate --seed
   ```

7. **Install JS dependencies and build assets**

   ```bash
   npm install
   npm run dev    # for local development
   # or
   npm run build   # for production assets
   ```

8. **Serve the application**

   ```bash
   php artisan serve
   ```

   The app will be available at `http://127.0.0.1:8000`.

> **Note:** `AboutsController`, `BusinessesController`, and `ServicesController` upload files (CV, photos, logos, images) directly into `public/cv` and `public/image` — no `php artisan storage:link` is required for this project.

## Environment Variables

Key variables from `.env.example` you'll need to configure:

| Variable | Purpose |
|---|---|
| `APP_NAME` | Application name shown in the UI/emails |
| `APP_ENV` | Environment (`local`, `production`, etc.) |
| `APP_KEY` | Encryption key, generated via `php artisan key:generate` |
| `APP_DEBUG` | Toggle debug error pages |
| `APP_URL` | Base URL of the app |
| `LOG_CHANNEL`, `LOG_LEVEL` | Logging configuration |
| `DB_CONNECTION` | Database driver (default `mysql`) |
| `DB_HOST`, `DB_PORT` | Database host/port |
| `DB_DATABASE` | Database name |
| `DB_USERNAME`, `DB_PASSWORD` | Database credentials |
| `BROADCAST_DRIVER`, `CACHE_DRIVER`, `QUEUE_CONNECTION`, `SESSION_DRIVER` | Core Laravel service drivers |
| `SESSION_LIFETIME` | Session lifetime in minutes |
| `MAIL_MAILER`, `MAIL_HOST`, `MAIL_PORT`, `MAIL_USERNAME`, `MAIL_PASSWORD`, `MAIL_ENCRYPTION`, `MAIL_FROM_ADDRESS`, `MAIL_FROM_NAME` | Outgoing mail configuration (used for password reset emails) |
| `AWS_*` | S3 credentials, only needed if you switch the filesystem disk to S3 |
| `PUSHER_*`, `VITE_PUSHER_*` | Broadcasting configuration, only needed if you enable Pusher-based broadcasting |

## Usage

- **Public site:** visit `/` to see the portfolio profile page.
- **Admin login:** visit `/adminAuth/login` to sign in.
- **Admin dashboard:** after logging in, visit `/admin/home` to see the dashboard, and use the sidebar/routes under `/admin/*` (about, education, experience, skill, category, business, service, testimonial, blog, contact, setting) to manage content.

If you ran `php artisan db:seed` (or `migrate --seed`), an admin account is created by `database/seeders/AdminSeeder.php` — check that file for the seeded credentials, and change the password after first login.

## API Endpoints

`routes/api.php` currently exposes a single Sanctum-protected endpoint:

| Method | Endpoint | Description |
|---|---|---|
| `GET` | `/api/user` | Returns the authenticated user (requires a valid Sanctum token) |

All other application routes are standard web routes defined in `routes/web.php`, not JSON API endpoints.

## Project Structure

Notable custom folders/files beyond the standard Laravel layout:

```
app/Http/Controllers/          Admin CRUD controllers (About, Education, Experience, Skill, Category,
                                Business, Service, Testimonial, Blog, Contact, Setting, Admin, Home)
app/Http/Controllers/Auth/     laravel/ui authentication scaffolding (login, register, password reset)
app/Http/Controllers/profile/  Public-facing controllers (ProfileController, ContactMeController)
app/Models/                    Eloquent models: About, Education, Experience, Skill, Category, Business,
                                Service, Testimonial, Blog, Contact, Setting, User
database/migrations/           Schema for about, education, experiences, skills, categories, businesses,
                                services, testimonials, blogs, contacts, settings (plus default Laravel tables)
database/seeders/               AdminSeeder (default admin user), SettingSocialSeeder (social link settings)
resources/views/index.blade.php Admin dashboard home view
resources/views/dashboard/      Admin dashboard layouts and per-resource views
resources/views/profile/home/   Public portfolio page view
resources/views/auth/           Login/registration/password-reset views
routes/web.php                  Public routes + `/adminAuth` (auth) and `/admin` (dashboard, auth-protected)
routes/api.php                  Sanctum-protected API routes
public/image/, public/cv/       Uploaded photos, logos, and CV files
```

## Testing

The project ships with PHPUnit configured (`phpunit.xml`) and a starter test suite:

```
tests/Feature/ExampleTest.php
tests/Unit/ExampleTest.php
```

Run the test suite with:

```bash
php artisan test
```

or directly via PHPUnit:

```bash
vendor/bin/phpunit
```

## License

No `LICENSE` file is currently present in this repository. Add one (e.g. [MIT](https://choosealicense.com/licenses/mit/)) to clarify how others may use this code.
