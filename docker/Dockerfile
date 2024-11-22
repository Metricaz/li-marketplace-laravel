FROM node:18-alpine as build-stage

WORKDIR /app/

COPY ./package.json ./package-lock.json /app/

RUN npm install

COPY ./ /app/

RUN npm run build

FROM php:8.3-fpm

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

ARG user
ARG uid

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN pecl install redis-5.3.7 \
    && docker-php-ext-enable redis

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

WORKDIR /var/www/

COPY ./ .

COPY --from=build-stage /app/public /var/www/public

RUN composer install --no-dev -o

RUN chown -R $user:$user /var/www

USER $user
