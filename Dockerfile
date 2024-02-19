# Gunakan versi PHP 8.2
FROM php:8.2-fpm

# Instal ekstensi PHP dan alat yang dibutuhkan
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring xml

# Instal Composer
RUN curl -sS https://getcomposer.org/install

# Set working directory
WORKDIR /var/www/html

# Salin file Laravel ke dalam kontainer
COPY . .

# Instal dependensi dan autoloader

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer self-update


RUN composer install

# Set permissi folder storage dan bootstrap
RUN chmod -R 775 storage bootstrap/cache

# Expose port
EXPOSE 9000

# Jalankan Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=9000"]