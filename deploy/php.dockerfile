FROM php:7.4.2-fpm
RUN docker-php-ext-install pdo pdo_mysql
COPY . /api
WORKDIR /api
