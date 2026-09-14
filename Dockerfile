FROM php:8.4-fpm-alpine

RUN apk add --no-cache \
    git curl libpng-dev oniguruma-dev libxml2-dev zip unzip nginx nodejs npm \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install --no-interaction --optimize-autoloader --no-dev

RUN npm ci --ignore-scripts && npm run build

RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]