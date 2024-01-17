# Typesense Search with Laravel

This sample application shows you how to use Laravel Scout's native integration with Typesense.

We use a sample dataset with 10K user records, show you how to search through the dataset.  

## Installation

Install composer dependencies
```bash
composer install
```
Create .env file
```bash
cp .env.example .env
```
Generate APP_KEY
```bash
php artisan key:generate
```

Start Typesense:

```bash
export TYPESENSE_API_KEY=xyz

mkdir $(pwd)/typesense-data

docker run -p 8108:8108 \
            -v$(pwd)/typesense-data:/data typesense/typesense:0.25.2 \
            --data-dir /data \
            --api-key=$TYPESENSE_API_KEY \
            --enable-cors
```

Migrate the databases and seed the testing data.

Create the database if not created in prompt. We use SQLite.
```bash
php artisan migrate --seed
```

Install node dependencies and build the frontend.
```bash
npm install
```
```bash
npm run build
```

## Run the App

```bash
php artisan serve
```

Visit [http://127.0.0.1:8000](http://127.0.0.1:8000) to see the app.

## Documentation

Read more about how to use Laravel Scout with Typesense here: [https://laravel.com/docs/10.x/scout#typesense](https://laravel.com/docs/10.x/scout#typesense).
