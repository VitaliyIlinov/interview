#https://hub.docker.com/_/php
FROM php:7.2-fpm
MAINTAINER vitaliy ilinov <ilinov123@gmail.com>

# console command: id -u
# 1000 - is USER;
# && creating file in MOUNT volume will be from current user
ARG uid

# Install and enable xDebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    locales \
    nano \
    zip \
    unzip \
    autoconf \
    make \
    curl

## Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Create system user
RUN usermod -u ${uid} www-data \
    && groupmod -g ${uid} www-data

COPY ./ /docker

#additional
RUN bash /docker/after-build.sh
