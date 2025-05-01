# Use the official PHP image with FPM (FastCGI Process Manager) from the Docker Hub
FROM php:8.1-fpm

# Install dependencies required by Laravel (e.g., GD, PDO extensions, and more)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Set the working directory inside the container
WORKDIR /var/www

# Copy the application files into the container
COPY . .

# Install Composer globally
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Run composer install to install PHP dependencies
RUN composer install --optimize-autoloader --no-dev

# Set file permissions (optional but recommended)
RUN chown -R www-data:www-data /var/www

# Expose port 9000 for PHP-FPM
EXPOSE 9000

# Set the command to run the PHP-FPM server
CMD ["php-fpm"]
