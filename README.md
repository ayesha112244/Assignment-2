# Earth Trekkers — Laravel Travel Itinerary Web Application

## Project Overview

Earth Trekkers is a Laravel-based travel itinerary web application developed for **Assignment 2**.  
The goal of this project is to demonstrate a **strong understanding of modern web development concepts**, including authentication, authorization, database relationships, frontend frameworks, and UI interactivity.

The application allows users to explore travel itineraries, leave reviews, and browse destinations and countries.  
Admins have additional privileges such as editing and deleting content. The project follows Laravel best practices and uses a modern frontend stack.

---

## Technologies Used

- **Laravel 10** — backend framework
- **PHP 8+**
- **MySQL** — relational database
- **Tailwind CSS** — utility-first styling
- **Vite** — frontend build tool
- **Alpine.js** — lightweight JavaScript interactivity
- **Blade Templates** — server-side rendering
- **PHPUnit** — basic testing

---

## Installation & Setup Guide

This section explains **exactly how to install and run the project**, step by step.

### 1. Clone the Repository

```bash
git clone <repository-url>
cd Assignment-2
```

### 2\. Install PHP Dependencies

Laravel dependencies are managed using Composer.

`composer install`

If Composer is not installed, install it from:  
[https://getcomposer.org/](https://getcomposer.org/)

* * *

### 3\. Environment Setup

Create the `.env` file:

`cp .env.example .env`

Generate application key:

`php artisan key:generate`

* * *

### 4\. Database Configuration

Update your `.env` file with database credentials:

`DB_DATABASE=cht2520
DB_USERNAME=root
DB_PASSWORD=secret`

### 5\. Run Migrations & Seeders

This creates all tables and inserts sample data.

`php artisan migrate php artisan db:seed`

Seeders include:

-   Users
    
-   Itineraries
    
-   Reviews
    
-   Destinations
    
-   Countries
    

* * *

### 6\. Install Frontend Dependencies

Install Node packages:

`npm install`

* * *

### 7\. Build Frontend Assets (Tailwind + Vite)

`npm run build`

For development (hot reload):

`npm run dev`

* * *

### 8\. Run Laravel Server

`php artisan serve`

Open browser at:

`http://127.0.0.1:8000`

## Main Feature 1 — Authentication & Authorization

Authentication is implemented **manually**, following university practicals.

## Seeded Users for Login (Testing Purpose)

For testing authentication and authorization, **three users are pre-seeded** in the database using `UserSeeder`.

The tutor can log in using **any one of the following credentials**:

### Admin User

-   **Name:** Ayesha
    
-   **Email:** ayesha@example.com
    
-   **Password:** password123
    
-   **Role:** Admin
    

This user has **admin privileges** and can manage all itineraries and protected actions.

* * *

### Normal Users

-   **Name:** John Doe
    
    -   Email: john@example.com
        
    -   Password: password123
        
    -   Role: Normal User
        
-   **Name:** Mark Smith
    
    -   Email: mark@example.com
        
    -   Password: password123
        
    -   Role: Normal User
        

These users have **limited access** based on authorization rules.

* * *

### Role Handling

-   Roles are managed using `role_id`
    
    -   `role_id = 1` → **Admin**
        
    -   `role_id = 2` → **Normal User**
        
-   Laravel **Gates** are used to restrict access based on role and ownership.
    

* * *

### ℹ️ Note for Tutors

> Please use any of the above seeded accounts to log in and test authentication and authorization features.  
> No registration is required for testing.

### Key Components

-   `AuthController`
    
-   `Auth::attempt()` for login
    
-   User roles: **admin** and **normal user**
    
-   Laravel Gates for authorization
    
-   Protected routes using middleware
    
-   Conditional UI rendering using Blade directives
    

### Example: Gate Definition

`Gate::define('manage-itineraries', function ($user, $itinerary) {     return $user->id === $itinerary->user_id || $user->role === 'admin'; });`

### Why This Approach?

**Benefits**

-   Full control over login logic
    
-   Clear understanding of Laravel internals
    
-   Secure role-based access
    

**Limitations**

-   More code than Laravel Breeze
    
-   Requires manual validation and testing
    

* * *

## Main Feature 2 — Reviews System (Second Table)

A complete **Reviews system** was implemented to demonstrate the use of **relational databases**, **authentication**, and **authorization** within a Laravel application.  
This feature allows users to interact with itineraries while maintaining control through role-based permissions.

### Database Structure

A new table called **`reviews`** was created using a Laravel migration.

**reviews table**

-   `id` — Primary key used to uniquely identify each review
    
-   `itinerary_id` — Foreign key linking the review to a specific itinerary
    
-   `user_id` — Foreign key linking the review to the user who submitted it
    
-   `rating` — Numeric rating value provided by the user
    
-   `review` — Text content of the review
    
-   `created_at` — Timestamp showing when the review was created
    

This structure ensures that every review is always associated with **both a user and an itinerary**, enforcing referential integrity.

### Relationships

The following Eloquent relationships were defined:

-   **Itinerary hasMany Reviews**
    
-   **Review belongsTo Itinerary**
    
-   **Review belongsTo User**
    

These relationships allow Laravel to easily retrieve all reviews for an itinerary and identify which user wrote each review.

### Features

-   Only **authenticated users** can submit reviews
    
-   Reviews are displayed directly **under the related itinerary page**
    
-   **Admins can delete reviews**, demonstrating authorization control
    
-   Reviews are **paginated** to improve performance and usability
    

Authorization logic is enforced using **Gates and policies**, ensuring that sensitive actions such as deleting reviews are restricted.

### Why Reviews?

#### Problem Solved

-   Adds meaningful **user interaction**
    
-   Demonstrates **one-to-many database relationships**
    
-   Encourages **user-generated content**
    
-   Shows practical use of authentication and authorization
    

#### Limitations

-   No moderation queue for pending reviews
    
-   Reviews cannot be edited after submission
    
-   These limitations were accepted due to time constraints but can be improved in future versions
    

* * *

## Main Feature 3 — Tailwind CSS UI Upgrade

The entire user interface was rebuilt using **Tailwind CSS** to replace traditional custom CSS and improve responsiveness, consistency, and maintainability.

### Implementation

-   Tailwind CSS was installed and compiled using **Vite**
    
-   All legacy CSS files were removed
    
-   The application follows a **mobile-first design approach**
    
-   Responsive cards, forms, buttons, and navigation were implemented
    

Tailwind utility classes were used directly inside Blade templates to control layout, spacing, colours, and responsiveness.

### Example

`<div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">`

This example shows how Tailwind enables quick styling without writing separate CSS files.

### Why Tailwind?

#### Advantages

-   Faster development speed
    
-   Consistent UI across the application
    
-   Built-in responsiveness using breakpoints (`md`, `lg`, `xl`)
    
-   Eliminates large custom CSS files
    

#### Limitations

-   HTML can become verbose due to many utility classes
    
-   Requires learning Tailwind’s utility-based syntax
    

* * *

## Additional Feature — Alpine.js Interactivity

**Alpine.js** was used to add lightweight JavaScript interactivity without introducing a complex frontend framework.

### Where It Was Used

-   Mobile hamburger menu toggle
    
-   Show/hide review form
    
-   Smooth transitions and UI state handling
    

### Example

`<div x-data="{ open: false }">`

Alpine.js directives are embedded directly in Blade templates, making them easy to understand and maintain.

### Why Alpine.js?

-   No complex build setup
    
-   Lightweight and fast
    
-   Perfect for small UI interactions
    
-   Works naturally with Laravel Blade
    

#### Limitations

-   Not suitable for large-scale JavaScript applications
    
-   Limited state management compared to full frameworks
    

* * *

## Additional Feature — Destinations & Countries Module

A **Destinations and Countries module** was introduced to extend the project beyond basic CRUD functionality and demonstrate **scalable database design**.

### Database Design

-   **Destination hasMany Countries**
    
-   **Country belongsTo Destination**
    
-   **Country hasMany Itineraries**
    

This design allows itineraries to be logically grouped under countries, and countries under destinations.

### Pages Added

-   `/destinations`  
    Displays destination categories such as Europe, Asia, and Africa.
    
-   `/destinations/{country}`  
    Displays a country detail page with related itineraries.
    

### Purpose

This feature demonstrates:

-   Multi-level relational database modelling
    
-   Forward-thinking architecture
    
-   Clean separation of data concerns
    
-   Preparation for advanced filtering and dropdown selection
    

### Current Status

-   Destinations and countries are fully functional
    
-   Country pages display itineraries dynamically
    
-   Country information is currently static and intended for future expansion
    

Even though this feature is still evolving, it clearly shows **planning for scalability**, which is important from a developer’s perspective.

* * *

## Testing

Basic automated tests were written using **PHPUnit**.

### Tests Included

-   Itinerary index page loads successfully
    
-   Authenticated users can submit reviews
    

### Why Testing?

-   Ensures core functionality works as expected
    
-   Demonstrates professional development practices
    
-   Helps prevent regressions during future changes
    

#### Limitation

-   Limited test coverage due to assignment time constraints
    

* * *

## Responsive Design

The application was designed with responsiveness as a core requirement.

-   Mobile-first layout
    
-   Tailwind breakpoints (`md`, `lg`, `xl`)
    
-   Collapsing navbar on small screens
    
-   Card stacking and form resizing
    

This ensures the application works well across desktop, tablet, and mobile devices.

* * *

## Critical Analysis

### Why Laravel?

-   MVC architecture improves code organisation
    
-   Built-in authentication and authorization
    
-   Strong security features
    
-   Large ecosystem and community support
    

### Why Tailwind + Alpine?

-   Modern frontend stack
    
-   Lightweight and efficient
    
-   High developer productivity
    
-   Ideal for Laravel Blade projects
    

### Limitations & Future Improvements

-   Fully dynamic country information
    
-   Image uploads for destinations
    
-   Advanced itinerary filtering
    
-   Review moderation dashboard
    

* * *

## Conclusion

**Earth Trekkers** demonstrates a strong understanding of:

-   Laravel MVC architecture
    
-   Authentication and authorization
    
-   Relational database design
    
-   Modern frontend tooling
    
-   Clean UI and responsive UX
    

The project was developed with **scalability, maintainability, and professional standards** in mind, reflecting both technical competence and thoughtful design decisions.