# Base
FROM php:8.4-fpm AS base

RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev libzip-dev zip unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip \
    && pecl install redis && docker-php-ext-enable redis \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# -------------------------
# DEV
# -------------------------
FROM base AS dev

RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN groupmod -g 1000 www-data && usermod -u 1000 www-data
USER www-data

WORKDIR /var/www/html

# -------------------------
# PROD
# -------------------------
FROM base AS prod

# 1. Copiar solo dependencias (cache de Docker)
COPY composer.json composer.lock ./

# 2. Instalar sin scripts (clave para evitar error de artisan)
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction \
    --no-scripts

# 3. Copiar el resto del proyecto
COPY --chown=www-data:www-data . .

# 5. Permisos necesarios para Laravel
RUN mkdir -p storage bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache

# 6. Ejecutar scripts de Laravel (ahora sí existe artisan)
RUN php artisan key:generate || true \
    && php artisan package:discover || true \
    && php artisan config:cache || true \
    && php artisan route:cache || true \
    && php artisan view:cache || true


# 7. Usuario final
RUN groupmod -g 1000 www-data && usermod -u 1000 www-data
USER www-data
