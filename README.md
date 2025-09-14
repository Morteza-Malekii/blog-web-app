# 📰 Laravel News Platform

A modular **news publishing platform** built with Laravel, designed similar to *Virgool* (Medium-style blog).  
Users can register, post news/articles, and after admin approval their content gets published.  
The project will later be converted into a **Progressive Web Application (PWA)**.

---

## 🚀 Tech Stack
- **Backend:** Laravel 12 (PHP 8.x)  
- **Frontend:** Blade, Bootstrap 5, Vite (asset bundling)  
- **Database:** MySQL / MariaDB  
- **Authentication:** Laravel Auth, Google OAuth, GitHub OAuth  
- **Validation & Security:** Laravel Form Requests, Google reCAPTCHA v3  
- **Architecture:** MVC, Repository Design Pattern  
- **Others:** Events & Listeners, Queues & Jobs, Middleware, Ajax  

---

## ✨ Features

### 🔹 Core
- Template adaptation & modular directory structure.  
- Laravel routing and modular assets management with **Vite**.  
- Custom **user registration & login system** with full validation.  
- **Google reCAPTCHA v3** integration (closure & custom validation rules).  
- **Social login** (Google, GitHub).  

### 🔹 User & Auth
- Profile management.  
- Password recovery system with **Token Expiry & Rate Limiting**.  
- Role & permission system with custom **middleware**.  

### 🔹 Content Management
- Message management system.  
- Category management (CRUD, pagination, relationships: `belongsTo`, `hasMany`).  
- Article management: create, update, delete, pagination.  
- File upload & custom **File Manager**.  
- Ajax-powered CRUD (delete, update, filters: newest, oldest, most popular).  

### 🔹 Advanced
- Events & Listeners: Newsletter system.  
- Queues & Jobs: Scheduled email sending.  
- **Repository Pattern** for clean refactored code.  
- **Search system** for articles.  

### 🔹 Analytics
- Traffic statistics (visitors, search engines) with **ApexCharts**.  
- Monthly visits, article stats, and user count dashboard.  

---

## 📌 Project Roadmap
- [x] Template adaptation with Laravel + modular setup  
- [x] Authentication (custom + Google/GitHub)  
- [x] Google reCAPTCHA v3 integration  
- [x] User messages & notifications  
- [x] Newsletter with Events & Listeners  
- [ ] File Manager (in progress)  
- [ ] Article search system  
- [ ] Convert to **PWA**  

---

## 🔧 Installation
```bash
git clone https://github.com/your-username/news-platform.git
cd news-platform
composer install
npm install && npm run dev
php artisan migrate --seed
php artisan serve
