FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && docker-php-ext-install pdo_mysql

WORKDIR /var/docker/laravel-unit-testing

CMD ["php-fpm"]

EXPOSE 9000
