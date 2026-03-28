# ai-profiler-agent

## Frontend Vue

```bash
cd vue-frontend
```

* Install dependencies (if not yet installed):

```bash
npm install
```

* Run the local development server:

```bash
npm run dev
```

## Backend Laravel API

```bash
cd laravel-backend
```

* Environment setup

Copy `.env`:

```bash
cp .env.example .env
```

* Generate app key

```bash
php artisan key:generate
```

* Run the database

```bash
docker compose up --build
```

* Run migrations

```bash
php artisan migrate
```

* Start the Laravel server

```bash
php artisan serve
```

* Start the queue worker

```bash
php artisan queue:work
```

## Python Scraping Service

```bash
cd python-service
```

* Run the Python server

```bash
docker compose up --build
```

## Usage:

Access `127.0.0.1:5173/` and use the provided buttons to verify the connection between layers.
