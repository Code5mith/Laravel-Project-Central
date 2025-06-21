# **Laravel Project-Central**

https://github.com/user-attachments/assets/2e19e710-2970-4ae8-acf0-119ad0314eea

This repository contains a simple Laravel application designed to help you **track your projects**, **register new project ideas**, and **easily view your completed and active projects**. It serves as a comprehensive demonstration and learning ground for core web development concepts.This repository contains a full-stack web application built with the **Laravel PHP framework**.

## **Project Overview**

This application showcases the implementation of fundamental web application features within the Laravel ecosystem:

* **Model-View-Controller (MVC) Architecture:** The project is structured adhering strictly to the MVC design pattern, demonstrating clear separation of concerns for models, views, and controllers.  
* **CRUD Operations:** Full Create, Read, Update, and Delete functionality is implemented for key resources, illustrating data persistence and manipulation with Eloquent ORM.  
* **User Authentication:** A complete user authentication system is in place, covering registration, login, and session management to secure application access.  
* **User Authorization (Gates & Policies):** Advanced access control is implemented using Laravel's powerful Gate and Policy features, ensuring users only interact with resources they are permitted to. This includes:  
  * Defining granular permissions (e.g., resource ownership checks).  
  * Integrating authorization seamlessly into routes and controller logic.  
* **Full-Stack Implementation:** The application is a true full-stack solution, leveraging:  
  * **Laravel's Backend Infrastructure:** For routing, controllers, database interactions (Eloquent ORM), and business logic.  
  * **Laravel Blade for Frontend:** Dynamic and reusable views are crafted using Laravel's templating engine, Blade, providing a robust frontend experience directly within the Laravel application.  

## **Technologies Used**

* **PHP:** Core programming language  
* **Laravel Framework:** Web application framework  
* **SQLite:** Relational database management system  
* **Eloquent ORM:** Laravel's powerful ORM for database interaction  
* **Laravel Blade:** Templating engine for frontend views  
* **HTML, CSS, JavaScript:** Standard web technologies  
* **Composer:** PHP dependency manager  
* **npm:** vite dependency  

## **Getting Started**

To set up and run this project locally, follow these steps:

1. **Clone the repository:** 

```bash
    git clone  https://github.com/Code5mith/Laravel-Project-Central.git
    cd Laravel-Project-Central
```
2. **Install PHP dependencies**  

```bash
   composer install
```

3. **Install Node.js dependencies (if any frontend assets):**  
```bash
   npm install or yarn install  
   npm run dev or npm run build
```

4. **Copy the environment file:**  
```bash
   cp .env.example .env
```

6. **Configure your database:**  
```bash
    cd Laravel-Project-Central/database
    touch database.sqlite //create sqlite file
   ```
7. **Run database migrations:**  
```bash
   php artisan migrate
```

8. **Seed the database (Generate Demo Data with seeders ):**  
```bash
   php artisan db:seed 
```

9.  **Start the Laravel development server:**  
```bash
   php artisan serve

  The application will typically be available at http://127.0.0.1:8000.

```

## **License**

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
