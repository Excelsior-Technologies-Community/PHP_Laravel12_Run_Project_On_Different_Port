#  PHP_Laravel12_Run_Project_On_Different_Port

### **Run Laravel 12 App on Custom Ports (Simple & Clear Guide)**

---

#  **Introduction**

This project explains how to run a **Laravel 12** application on **different ports** instead of the default `8000`.
Laravel normally runs on:

```
http://127.0.0.1:8000
```

But sometimes:

* The default port is busy
* You want to run multiple Laravel projects at once
* You want to run API and frontend on different ports
* You want a clean project demonstration

This guide shows how to run the same Laravel project on **any port** such as `8001`, `9000`, `8080`, etc.

---

#  **Overview**

In this project, you will learn:

* How to run Laravel on a custom port
* How to run multiple Laravel apps at the same time
* How to use the `--port` and `--host` commands
* Minimal folder structure required
* Optional test route to verify your project

No controllers, models, or extra code are required.
This is a pure **Laravel serve command project**.

---

#  **1. Install Laravel Project**

```bash
composer create-project laravel/laravel PHP_Laravel12_Run_Project_On_Different_Port
cd PHP_Laravel12_Run_Project_On_Different_Port
```

---

#  **2. Run Laravel on Default Port (8000)**

```bash
php artisan serve
```

Your app will run at:

```
http://127.0.0.1:8000
```

---

#  **3. Run Laravel on a Different Port (Custom Port)**

###  Example: Run on Port **8001**

```bash
php artisan serve --port=8001
```

Output:

```
Laravel development server started: http://127.0.0.1:8001
```

###  Example: Run on Port **9000**

```bash
php artisan serve --port=9000
```

###  Example: Run on Port **8080**

```bash
php artisan serve --host=localhost --port=8080
```

---

#  **4. Run Multiple Laravel Projects at the Same Time**

### Project 1

```bash
php artisan serve --port=8000
```

### Project 2

```bash
php artisan serve --port=8001
```

### Project 3

```bash
php artisan serve --port=9000
```

- No interference
  
- All apps run independently
  
- Perfect for testing and development

---

#  **5. Project Folder Structure (Only Required Folders)**

```
PHP_Laravel12_Run_Project_On_Different_Port/
│
├── app/
├── bootstrap/
├── config/
├── public/
├── resources/
├── routes/
│   └── web.php
├── storage/
├── tests/
└── .env
```

No controllers or models are needed.
This project focuses only on **running Laravel on different ports**.

---

#  **6. Optional Test Route**

Add this in `routes/web.php`:

```php
Route::get('/', function () {
    return "Laravel App Running Successfully!";
});
```

Visit:

```
http://localhost:8001
```

---

#  **7. Your Project is Ready**

Run Laravel on any port you want:

```bash
php artisan serve --port=YOUR_PORT
```

Example:

```bash
php artisan serve --port=7000
```
---
# Output:

---
Port Number: 8001
```
http://localhost:8001
```
<img width="1919" height="1085" alt="Screenshot 2025-12-11 161949" src="https://github.com/user-attachments/assets/4e6208b7-24e7-4fe5-b5a2-aa4b2d8a30bb" />

---
Port Number: 9000
```
http://localhost:9000
```
<img width="1919" height="1089" alt="Screenshot 2025-12-11 162305" src="https://github.com/user-attachments/assets/c546cefb-95dd-4858-9b9a-2571b77e0586" />

---

Your PHP_Laravel12_Run_Project_On_Different_Port Project is Raedy!
