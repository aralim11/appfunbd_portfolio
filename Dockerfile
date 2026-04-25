FROM php:8.2-fpm

# System dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev

# PHP extensions
RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd

WORKDIR /var/www/html

# Composer download
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY . .

# Install dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Set permissions for Laravel
RUN chmod -R 777 storage bootstrap/cache

# Set the entrypoint script
RUN chmod +x ./docker/entrypoint.sh
RUN sed -i 's/\r$//' ./docker/entrypoint.sh

# Expose default port 9000 and start php-fpm server
ENTRYPOINT ["./docker/entrypoint.sh"]
