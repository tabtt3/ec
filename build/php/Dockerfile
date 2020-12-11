FROM php:7.4-fpm-alpine

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN docker-php-ext-install opcache pdo_mysql

WORKDIR /var/www/html
USER www-data

