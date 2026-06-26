# Portfolio Management Website

This is a Laravel portfolio website with a Filament admin panel. It lets an admin manage personal profile information, skills, education, training, experience, services, projects, project images, contact messages, SEO metadata, and social media links.

## Main Features

- Public portfolio homepage with hero, about, skills, resume, portfolio, services, and contact sections.
- Filament admin dashboard for managing all portfolio content.
- Dynamic job title, profile picture, banner image, website, degree, freelance status, and introduction.
- Project categories, project detail pages, and project image galleries.
- Contact form with Google reCAPTCHA validation.
- SEO fields for meta title, description, keywords, and Open Graph metadata.
- Social links for GitHub, LinkedIn, Facebook, Instagram, and WhatsApp.
- Responsive frontend based on the iPortfolio Bootstrap template.

## Tech Stack

- PHP 8.2+
- Laravel 11
- Filament 3
- MySQL
- Bootstrap, Bootstrap Icons, AOS, GLightbox, Isotope, Swiper

## Important Paths

- Public homepage: `resources/views/home.blade.php`
- Main layout: `resources/views/layouts/app.blade.php`
- Project detail page: `resources/views/project_detail.blade.php`
- Public routes: `routes/web.php`
- Homepage/contact controller: `app/Http/Controllers/HomeController.php`
- Portfolio admin resource: `app/Filament/Resources/PortfolioResource.php`
- Main frontend CSS: `public/assets/css/main.css`

## Setup

1. Install PHP dependencies:

```bash
composer install
```

2. Install JavaScript dependencies:

```bash
npm install
```

3. Create the environment file:

```bash
copy .env.example .env
php artisan key:generate
```

4. Configure the database in `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio
DB_USERNAME=root
DB_PASSWORD=
```

5. Configure Google reCAPTCHA for the contact form:

```env
GOOGLE_CAPTCHA_SITE_KEY=your_site_key
GOOGLE_CAPTCHA_SECRET_KEY=your_secret_key
```

6. Run migrations:

```bash
php artisan migrate
```

7. Link public storage for uploaded images:

```bash
php artisan storage:link
```

8. Start the local server:

```bash
php artisan serve
```

The site will usually be available at `http://127.0.0.1:8000`.

## Admin Panel

The Filament admin panel is available at:

```text
/admin
```

Use the admin panel to manage:

- Portfolio profile, SEO, images, and social links
- Skills
- Education
- Trainings and courses
- Experience
- Services
- Project categories
- Projects
- Project details
- Project images
- Contact form submissions

## Frontend Content Flow

The homepage is powered by `HomeController@index`. It loads active records ordered by `placement` where applicable, then passes them to `resources/views/home.blade.php`.

The contact form submits to `HomeController@contactusform`, validates the form input, verifies the Google reCAPTCHA token, and stores the message in the `contact_us` table.

Project detail pages are loaded through:

```text
/project_detail/{id}
```

## Notes

- Uploaded profile, banner, and project images are stored on the `public` disk.
- Fill the Portfolio record first, because the frontend layout expects profile data for the sidebar, SEO tags, and contact details.
- If social URLs are empty, their sidebar icons are hidden automatically.
- If SEO fields are empty, the site falls back to the portfolio name and introduction.
