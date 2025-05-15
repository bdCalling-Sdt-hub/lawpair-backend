# LawPair

LawPair is a web application designed to connect users with legal resources and professionals. Built using the Laravel framework, it provides a robust backend for managing users, lawyers, categories, and legal resources.

## Features

- User authentication and authorization.
- Lawyer profiles with detailed information.
- Categorized legal resources.
- Favorites functionality for users to save resources or lawyers.
- Admin panel for managing content.
- API endpoints for frontend integration.

## Prerequisites

- PHP >= 8.2
- Composer
- MySQL
- Node.js and npm

## Installation

1. Clone the repository:
   ```bash
   git clone <repository-url>
   ```

2. Navigate to the project directory:
   ```bash
   cd lawpair-backend
   ```

3. Install PHP dependencies:
   ```bash
   composer install
   ```

4. Install Node.js dependencies:
   ```bash
   npm install
   ```

5. Set up the environment variables:
   - Copy the `.env.example` file to `.env`.
   - Update the `.env` file with your database and mail configurations.

6. Generate the application key:
   ```bash
   php artisan key:generate
   ```

7. Run database migrations and seeders:
   ```bash
   php artisan migrate --seed
   ```

8. Start the development server:
   ```bash
   php artisan serve
   ```

## Usage

- Access the application at `http://localhost:8000`.
- Use the admin panel to manage users, lawyers, and resources.

## API Documentation

The API endpoints are defined in the `routes/api.php` file. Use tools like Postman to test the API.

<!-- ## Testing

Run the test suite using PHPUnit:
```bash
php artisan test
``` -->


