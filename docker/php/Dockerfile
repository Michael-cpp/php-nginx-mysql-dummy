FROM php:8.5-fpm

ARG XDEBUG_VERSION=3.5.3

RUN docker-php-ext-install pdo_mysql

RUN pecl install xdebug-${XDEBUG_VERSION} \
    && docker-php-ext-enable xdebug
