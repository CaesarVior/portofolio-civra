FROM composer:2.7 AS vendor
WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install \
    --no-dev \
    --prefer-dist \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --no-progress \
    --optimize-autoloader

FROM node:20-slim AS node-builder
WORKDIR /app

COPY package.json package-lock.json ./
RUN npm ci

COPY . .
RUN npm run build

FROM php:8.5.12-apache

ENV APACHE_DOCUMENT_ROOT=/app/public

RUN set -eux; \
    docker-php-ext-install pdo_mysql; \
    a2enmod rewrite; \
    rm -f /etc/apache2/sites-enabled/000-default.conf

WORKDIR /app

COPY --chown=root:root . .
COPY --from=vendor --chown=root:root /app/vendor/ ./vendor/
COPY --from=node-builder --chown=root:root /app/public/build/ ./public/build/

COPY docker/apache-vhost.conf /etc/apache2/sites-available/000-default.conf
RUN a2ensite 000-default.conf

RUN set -eux; \
    mkdir -p storage/framework/cache \
             storage/framework/sessions \
             storage/framework/views \
             storage/logs \
             bootstrap/cache; \
    chown -R www-data:www-data storage bootstrap/cache; \
    find storage bootstrap/cache -type d -exec chmod 750 {} \;; \
    find storage bootstrap/cache -type f -exec chmod 640 {} \;; \
    chmod -R a-w app bootstrap config database resources routes vendor; \
    chmod 755 /app /app/public; \
    chmod 644 /app/public/index.php; \
    apache2ctl configtest

EXPOSE 80
