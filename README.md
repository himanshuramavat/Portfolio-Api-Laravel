# 📘 README — **Laravel API Repository**

## 📌 Project Name

**Portfolio Backend – Laravel API**

## 📖 Overview

This repository contains the **API-first backend** for my personal portfolio website.

The backend is built using **Laravel** and follows a **headless architecture**, exposing REST APIs that are consumed by a separate React frontend.

There are **no Blade views** in this project — it is designed purely as an API service.

---

## 🧠 Architecture

```
React Frontend
     ↓
Laravel REST API
     ↓
Database (MySQL)
```

* Frontend and backend are fully decoupled
* API is versioned (`/api/v1`)
* Suitable for web, mobile, or any future client

---

## ⚙️ Tech Stack

* PHP 8.x
* Laravel
* MySQL
* Laravel Sanctum (Authentication)
* REST API
* JSON Responses

---

## 📁 Project Structure

```
app/
 └── Http/
     └── Controllers/
         └── Api/
             └── V1/
database/
 ├── migrations/
 ├── seeders/
routes/
 └── api.php
```

---

## 🔐 Authentication

* Token-based authentication using **Laravel Sanctum**
* Public and protected API routes
* Ready for future role-based access

---

## 🔗 API Endpoints (Sample)

```
GET    /api/v1/profile
GET    /api/v1/projects
GET    /api/v1/projects/{id}
POST   /api/v1/contact
```

All responses follow consistent JSON structure and proper HTTP status codes.

---

## 🧪 Testing

* Feature and unit test structure included
* API endpoints tested independently of frontend

---

## 🚀 Local Setup

```bash
git clone <repository-url>
cd portfolio-api-laravel
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

---

## 🎯 Purpose of This Project

* Demonstrate **API design**
* Showcase **clean backend architecture**
* Follow real-world **headless CMS patterns**
* Serve as a scalable backend for frontend applications

---

## 📄 License

This project is for learning and portfolio purposes.

---