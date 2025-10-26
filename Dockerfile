# Gunakan image PHP 8.2
FROM php:8.2-cli

# Install dependensi dasar
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    libzip-dev \
    && docker-php-ext-install zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy semua file project ke container
COPY . .

# Install dependensi Laravel
RUN composer install

# Expose port 8000 untuk Laravel
EXPOSE 8000

# Jalankan Laravel development server
CMD php artisan serve --host=0.0.0.0 --port=8000
