FROM php:8.2-apache

WORKDIR /var/www/html

COPY . /var/www/html

RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
&& docker-php-ext-install zip

EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=8000