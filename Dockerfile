# Gunakan image resmi PHP dengan Apache
FROM php:8.2-apache

# Install dependensi sistem
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    zip \
    unzip \
    git \
    curl

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install ekstensi PHP
RUN docker-php-ext-install pdo_pgsql mbstring exif pcntl bcmath gd

# Aktifkan Apache mod_rewrite
RUN a2enmod rewrite

# Set environment variable untuk mengizinkan Composer dijalankan sebagai root
ENV COMPOSER_ALLOW_SUPERUSER=1

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Konfigurasi Apache untuk Laravel (pointing ke folder public)
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# Jalankan skrip build (install composer & npm assets)
RUN composer install --no-dev --optimize-autoloader

# Atur izin folder
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port
EXPOSE 80

# Jalankan Apache saat container dimulai
CMD ["apache2-foreground"]
