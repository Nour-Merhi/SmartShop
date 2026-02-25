# smartShop

> A lightweight Laravel-based e-commerce application (smartShop).

## Overview

smartShop is a small online store project built with Laravel. It provides basic e-commerce features such as product and category management, shopping cart, orders, shipments, customer accounts, product ratings, wishlists, and an admin area.

## Key Features

- Manage products and categories
- Shopping cart and checkout
- Orders and order items
- Shipments and delivery tracking
- Product ratings and wishlists
- Contact messages and simple admin panel

## Requirements

- PHP >= 8.x
- Composer
- MySQL (or compatible database)
- Node.js and npm (for frontend assets)

## Quick Start

1. Clone the repository
2. Install PHP dependencies:

   composer install

3. Copy the environment file and set database credentials:

   cp .env.example .env

4. Generate app key:

   php artisan key:generate

5. Run migrations and seeders:

   php artisan migrate --seed

6. Install frontend dependencies and build assets:

   npm install
   npm run dev

7. Run the development server:

   php artisan serve

## Project Structure (high level)

- `app/` — application code and Eloquent models (e.g., `app/Models`)
- `database/migrations/` — table definitions and schema migrations
- `database/seeders/` — seed data (e.g., `AdminSeeder`)
- `resources/views/` — Blade templates and UI
- `public/` — front-facing assets and entry point (`index.php`)

## Database

The repo includes migration files and an SQL dump `smartshop_db.sql` to help populate the database for testing.

## Tests

There are PHPUnit/Pest test stubs under `tests/`.

## Notes

- This README is a brief project overview. For environment-specific setup (Windows, Docker, or hosting), adjust the steps above.
- If you want, I can expand this README with example environment variables, API routes, or deployment steps.

# More Info 

Read the report attached in docs folder (docs/SmartShop_Report.pdf)

---

