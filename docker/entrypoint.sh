#!/bin/sh
set -e

if [ -f .env ]; then
    echo "Found .env file"
else
    echo "Copying .env.example to .env..."
    cp .env.example .env
fi

if grep -q "^APP_KEY=$" .env; then
    echo "Generating application key..."
    php artisan key:generate --force
fi

echo "Running migrations..."
php artisan migrate --force

echo "Clearing caches..."
php artisan config:clear
php artisan cache:clear

echo "Starting PHP-FPM..."
exec "$@"
