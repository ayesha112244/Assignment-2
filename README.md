# Earth Trekkers — Laravel Travel Itinerary Platform

A full-stack Laravel web application for sharing and exploring travel itineraries. Users can log in, browse trips by destination and country, and leave reviews. **Role-based authorization** controls who can edit and delete content. The interface is built with **Tailwind CSS** and **Alpine.js**.

> Part 2 of a two-part project. It extends my earlier **[Travel Itinerary Ideas](https://github.com/ayesha112244/travel-itinerary-ideas)** CRUD app.
>
> Coursework for Advanced Web Programming (CHT2520), University of Huddersfield, 2026.

---

## Features

### Authentication and role-based authorization
- **Custom-built login and logout** using `Auth::attempt()` (no starter kit), to show understanding of how Laravel authentication works
- **Two roles:** Admin and Normal User (stored as `role_id`)
- **Laravel Gates** control permissions:
  - `manage-itineraries`: admins can manage all itineraries; users can only edit or delete **their own**
  - `delete-review`: only admins can delete reviews
- Routes protected with `auth` and `can:` middleware, a custom **403 page**, and Blade directives that hide buttons users aren't allowed to use

### Reviews system
- Logged-in users can rate and review itineraries
- Reviews are shown on each itinerary page, with pagination
- Admins can remove reviews

### Destinations and Countries module
- A multi-level relational structure: **Destination → Countries → Itineraries**
- `/destinations` lists regions such as Europe, Asia and Africa
- Country pages show their related itineraries

### Modern, responsive UI
- The whole interface was rebuilt with **Tailwind CSS**, compiled with Vite
- **Alpine.js** adds a mobile menu toggle, a show/hide review form and smooth transitions
- Mobile-first layout that works on phone, tablet and desktop

### Core itinerary features
- Create, view, edit and delete itineraries, with validation
- Search and pagination

---

## Database Design

| Table | Key relationships |
|---|---|
| `users` | has many itineraries, has many reviews · `role_id` (1 = Admin, 2 = User) |
| `itineraries` | belongs to a user, belongs to a country, has many reviews |
| `reviews` | belongs to an itinerary, belongs to a user · rating and review text |
| `destinations` | has many countries |
| `countries` | belongs to a destination, has many itineraries |

The schema was built step by step through **13 migrations**, and **seeders** fill every table with sample data.

---

## Tech Stack

| Layer | Technology |
|---|---|
| Back end | Laravel 12, PHP 8.2+, Eloquent ORM |
| Database | MySQL |
| Front end | Blade, Tailwind CSS 4, Alpine.js, Vite |
| Auth | Custom authentication, Laravel Gates and middleware |

---

## Getting Started

**Requirements:** PHP 8.2+, Composer, Node.js and npm, MySQL

```bash
git clone https://github.com/ayesha112244/earth-trekkers.git
cd earth-trekkers

composer install
npm install

cp .env.example .env
php artisan key:generate
```

Create a MySQL database, then update the `DB_` settings in `.env`.

```bash
php artisan migrate --seed
npm run build
php artisan serve
```

Open **http://127.0.0.1:8000**

### Demo accounts (created by the seeder)

| Role | Email | Password |
|---|---|---|
| Admin | ayesha@example.com | password123 |
| User | john@example.com | password123 |
| User | mark@example.com | password123 |

*These accounts exist only in your local database after seeding.*

---

## Design Decisions

- **Why custom authentication instead of Breeze?** Full control over the login flow and a clear understanding of Laravel internals. The trade-off is more code to write and maintain.
- **Why Tailwind CSS?** Faster, consistent styling with built-in responsive breakpoints. The trade-off is more verbose HTML.
- **Why Alpine.js?** Lightweight interactivity that fits naturally into Blade, without the overhead of a full JavaScript framework.

---

## Future Improvements

- Let users edit their own reviews, and add a review moderation dashboard
- Image uploads for destinations and itineraries
- Advanced filtering (by difficulty, country or rating)
- Wider automated test coverage with PHPUnit feature tests

---

**Author:** Ayesha Sohail · [GitHub](https://github.com/ayesha112244)
