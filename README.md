# CamachoTFA7 - Point of Sale (POS) Web Application

![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![SQLite](https://img.shields.io/badge/SQLite-003B57?style=for-the-badge&logo=sqlite&logoColor=white)
![Blade](https://img.shields.io/badge/Blade-Templating-F05340?style=for-the-badge&logo=laravel&logoColor=white)

A lightweight, modern, and responsive **Point-of-Sale (POS) System** developed with **Laravel 12**, **Eloquent ORM**, and **Blade Templating Engine**. Created as a submission for **TFA 5 & 6** (Formative Assessment).

---

## 📌 Project Overview

**CamachoTFA7** is designed to streamline retail and service operations for small-to-medium businesses. It demonstrates core Laravel capabilities including MVC architecture, database migrations, model seeders, Eloquent relationships and queries, dynamic Blade layouts, and custom responsive CSS styling.

---

## ✨ Features

- **🏠 Interactive Landing Page**: Welcoming dashboard with fast shortcuts to primary modules and system highlights.
- **👥 Customer Account Management**: View all registered customer profiles (ID, Name, Email, Phone, Created At) fetched dynamically via Eloquent ORM.
- **👤 User & Role Management**: Directory of system staff with distinct usernames and access roles (Admins, Managers, Cashiers, Inventory Staff, Reports Viewers).
- **ℹ️ Informative About Page**: Detailed breakdown of system objectives, technology stack, user roles, and future roadmap.
- **🌱 Seeded Sample Data**: Built-in seeders (`CustomerSeeder`, `UserSeeder`) for rapid local testing and evaluation.
- **🎨 Custom Modern UI**: Clean design system built with custom CSS, responsive navigation, badges, data tables, and card layouts without bloated dependencies.

---

## 🛠️ Tech Stack

| Technology | Purpose |
| :--- | :--- |
| **PHP 8.2+** | Backend Programming Language |
| **Laravel 12.x** | PHP Web Application Framework |
| **Eloquent ORM** | Database Object-Relational Mapping |
| **Blade Engine** | Server-Side Templating & Layout Inheritance |
| **SQLite** | Lightweight Zero-Configuration Development Database |
| **CSS3** | Custom Modular Design System & Responsive Layout |

---

## 📂 Project Structure

```text
CamachoTFA7/
├── pos-app/                               # Main Application Directory
│   ├── app/
│   │   ├── Http/Controllers/
│   │   │   ├── CustomerController.php     # Handles customer data listing
│   │   │   ├── PageController.php         # Serves static/landing pages (Home, About)
│   │   │   └── UserController.php         # Handles system user listing
│   │   └── Models/
│   │       ├── Customer.php               # Customer Eloquent Model
│   │       └── User.php                   # User Eloquent Model
│   ├── database/
│   │   ├── migrations/
│   │   │   ├── ..._create_users_table.php
│   │   │   └── ..._create_customers_table.php
│   │   └── seeders/
│   │       ├── DatabaseSeeder.php         # Master seeder
│   │       ├── CustomerSeeder.php         # 6 seeded customer records
│   │       └── UserSeeder.php             # 6 seeded user accounts
│   ├── resources/views/
│   │   ├── layouts/
│   │   │   └── app.blade.php              # Global layout with navbar & styling
│   │   ├── home.blade.php                 # Home / Landing page
│   │   ├── about.blade.php                # About page
│   │   ├── customers.blade.php            # Customer accounts table
│   │   └── users.blade.php                # User accounts table
│   └── routes/
│       └── web.php                        # Application web routes
└── README.md
```

---

## 🌐 Routes & Endpoints

| Method | URI | Controller Action | Route Name | Description |
| :---: | :--- | :--- | :--- | :--- |
| `GET` | `/` | `PageController@index` | `home` | Landing page with feature highlights and quick links |
| `GET` | `/about` | `PageController@about` | `about` | System overview, tech stack details, and project roadmap |
| `GET` | `/customers` | `CustomerController@index` | `customers` | Tabular listing of customer accounts from the database |
| `GET` | `/users` | `UserController@index` | `users` | Tabular listing of system staff user accounts |

---

## 🗄️ Database Schema & Entities

### 1. `customers` Table
| Column | Type | Attributes | Description |
| :--- | :--- | :--- | :--- |
| `id` | `BIGINT` | Primary Key, Auto-increment | Customer unique identifier |
| `full_name` | `VARCHAR(100)` | Not Null | Complete name of customer |
| `email` | `VARCHAR(100)` | Not Null | Contact email address |
| `phone` | `VARCHAR(20)` | Nullable | Contact mobile/telephone number |
| `created_at` | `DATETIME` | Not Null | Timestamp of record creation |

### 2. `users` Table
| Column | Type | Attributes | Description |
| :--- | :--- | :--- | :--- |
| `id` | `BIGINT` | Primary Key, Auto-increment | User unique identifier |
| `username` | `VARCHAR(50)` | Unique, Not Null | System login username |
| `full_name` | `VARCHAR(100)` | Not Null | Full staff name |
| `created_at` | `DATETIME` | Not Null | Timestamp of account creation |

---

## 🚀 Getting Started & Installation

Follow the steps below to clone, configure, and run the application locally.

### 1. Prerequisites
Ensure the following are installed on your machine:
- **PHP** >= 8.2 (with `pdo_sqlite`, `mbstring`, `openssl`, and `tokenizer` extensions enabled)
- **Composer** (PHP Package Manager)

### 2. Navigate to Application Directory
```bash
cd pos-app
```

### 3. Install Composer Dependencies
```bash
composer install
```

### 4. Setup Environment File
Copy the example environment file and generate a fresh application encryption key:
```bash
cp .env.example .env
php artisan key:generate
```

*(Note for Windows PowerShell: `copy .env.example .env`)*

### 5. Run Migrations & Seeders
Create the database tables and populate them with the initial sample data:
```bash
php artisan migrate:fresh --seed
```

### 6. Start the Local Server
```bash
php artisan serve
```

Once running, access the application in your browser at:
👉 **[http://127.0.0.1:8000](http://127.0.0.1:8000)**

---

## 📋 Seeded Test Data Summary

The application comes pre-loaded with test data:

- **Customers (`/customers`)**:
  - `Alice Reyes` (`alice.reyes@example.com` / `09171234567`)
  - `Bob Santos` (`bob.santos@example.com` / `09189876543`)
  - `Carol Dela Cruz` (`carol.dc@example.com` / `09205554321`)
  - `David Lim` (`david.lim@example.com` / `09351112233`)
  - `Eva Garcia` (`eva.garcia@example.com` / `09278889900`)
  - `Frank Ocampo` (`frank.ocampo@example.com` / `09194445566`)

- **Users (`/users`)**:
  - `Admin One` (Username: `admin_one`)
  - `Cashier Anna` (Username: `cashier_anna`)
  - `Manager Ben` (Username: `manager_ben`)
  - `Cashier Cathy` (Username: `cashier_cathy`)
  - `Inventory Dan` (Username: `inv_dan`)
  - `Reports Elsa` (Username: `reports_elsa`)

---

## 👨‍💻 Author

**Camacho**  
*TFA 5 & 6 (Formative Assessment) Submission*
