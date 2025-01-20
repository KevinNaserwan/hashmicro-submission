# Laravel Project with Vite

This project is a Laravel application that uses Vite for handling frontend assets. Follow the steps below to set up, build, and run the project.

## Prerequisites

Make sure you have the following installed on your machine:

- [PHP](https://www.php.net/) (version 8.x or higher)
- [Composer](https://getcomposer.org/) (for PHP dependencies)
- [Node.js](https://nodejs.org/) (version 16.x or higher)
- [npm](https://npmjs.com/) (Node.js package manager)
- [Vite](https://vitejs.dev/) (for building frontend assets)

## Installation

### 1. Clone the Repository

Clone the project repository to your local machine:

```bash
git clone https://your-repository-url.git
cd your-project-directory
```

### 2. Setup Laravel

#### Install PHP Dependencies

Run the following command to install PHP dependencies via Composer:

```bash
composer install
```

#### Configure the Environment

Copy the\*\* **`.env.example` file to** \*\*`.env`:

```bash
cp .env.example .env
```

#### Generate the Application Key

Run the following command to generate a new application key:

```bash
php artisan key:generate
```

#### Serve the Laravel Application

```bash
php artisan serve
```

### 3. Set up the Frontend (Vite)

#### Install Node.js DependenciesServe the Laravel Application

```bash
npm install
```

#### Build the Frontend AssetsInstall Node.js DependenciesServe the Laravel Application

```bash
npm run build
```

```

```
