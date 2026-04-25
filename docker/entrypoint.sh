#!/bin/sh

echo "Installing vendor dependencies..."
if [! -f "vendor/autoload.php" ]; then
    composer install
fi

# echo "Starting Laravel application setup..."
echo "Checking for .env file..."
if [ ! -f ".env" ]; then
    cp .env.example .env
fi

php artisan optimize:clear
php artisan migrate --seed --force


exec php-fpm -F