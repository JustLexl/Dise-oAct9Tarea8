# Activity 9 - User Authentication & Email Notifications

A simple web application built with Laravel that demonstrates user authentication, access control, and email notifications.

## Features

- **Public Landing Page:** Accessible to guests with links to log in or register.
- **User Authentication:** Complete registration and login system.
- **Private Dashboard:** Protected area accessible only to authenticated users.
- **Welcome Email:** Automatically sends a welcome email to the user upon registration.
- **Login Alert Email:** Sends a security notification email whenever a user logs into their account.

## Requirements

- PHP >= 7.3 or 8.x
- Composer
- MySQL

## How to Run

1. **Install dependencies:**
   ```bash
   composer install
   npm install
   ```

2. **Configure environment:**
   - Copy `.env.example` to `.env` (if not already done).
   - Configure database and mail settings in `.env`.

3. **Run migrations:**
   ```bash
   php artisan migrate
   ```

4. **Start the development server:**
   ```bash
   php artisan serve
   ```
   Open [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser.
