FROM php:8.1-fpm

# Arguments defined in docker-compose.yml
ARG user
ARG uid

# Set working directory
WORKDIR /var/www

# Copy all files from the current directory to the working directory
COPY . /var/www/

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    libzip-dev \
    unzip \
    mariadb-client

RUN pecl install redis
# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath
RUN docker-php-ext-install zip
RUN docker-php-ext-configure gd
RUN docker-php-ext-install gd

# Enable opcache for better performance
RUN docker-php-ext-enable opcache
COPY ./docker/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Make the wait-for-mysql.sh script executable
RUN chmod +x ./docker/wait-for-mysql.sh
RUN chmod +x ./docker/entrypoint.sh


RUN composer install --no-dev --optimize-autoloader
RUN cp .env.example .env
RUN php artisan key:generate

# Change current user to www
USER $user

# Set permissions for storage and bootstrap/cache directories
USER root
RUN chown -R $user:www-data /var/www/storage /var/www/bootstrap/cache
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache
USER $user

# Expose port 9000 and start php-fpm server
EXPOSE 9000