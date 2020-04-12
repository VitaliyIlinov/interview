#https://hub.docker.com/_/php
FROM php:7.2-fpm
MAINTAINER vitaliy ilinov <ilinov123@gmail.com>

ARG user
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
    git \
    curl

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY /docker/after-build.sh /docker/after-build.sh
RUN bash /docker/after-build.sh

# Create system user
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Change current user
USER $user
CMD ["php-fpm"]
