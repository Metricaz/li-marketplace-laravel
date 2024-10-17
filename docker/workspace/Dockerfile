FROM php:8.3-fpm

RUN echo "upload_max_filesize = 20M" > /usr/local/etc/php/conf.d/upload_max_filesize.ini && \
    echo "post_max_size = 25M" > /usr/local/etc/php/conf.d/post_max_size.ini

ARG user
ARG uid

RUN apt-get update && \
    apt-get install -y \
    git \
    curl \
    libwebp-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

RUN curl -sL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN pecl install redis-5.3.7 \
    && docker-php-ext-enable redis

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN useradd -G www-data,root -u $uid -d /home/$user $user

RUN mkdir -p /home/$user/.composer

RUN chown -R $user:$user /home/$user

WORKDIR /var/www/

COPY . .

USER $user
