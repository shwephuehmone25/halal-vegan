FROM php:8.2-fpm

# Install system dependencies & PHP extensions
RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev libpq-dev zip unzip nginx \
    && docker-php-ext-install pdo pdo_pgsql mbstring exclam bcmath gd

# Install Node.js & Yarn for frontend builds
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && corepack enable

WORKDIR /var/www/html

# Copy application code
COPY . .

# Install Composer dependencies
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Build frontend assets
RUN yarn install && yarn build

# Configure Nginx & startup
EXPOSE 80
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=80
