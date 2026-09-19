FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    libicu-dev \
    libzip-dev \
    zip \
    unzip \
    nginx \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install required PHP extensions (including intl and zip)
RUN docker-php-ext-configure intl \
    && docker-php-ext-install pdo pdo_pgsql bcmath gd exif intl zip

# Install Node.js & Yarn for frontend assets
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && corepack enable

WORKDIR /var/www/html

# Copy project files
COPY . .

# Install Composer dependencies
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Build frontend assets
RUN yarn install && yarn build

EXPOSE 80

CMD php artisan storage:link && php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=80
