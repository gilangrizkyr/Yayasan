FROM php:8.3-apache

# Install required PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libicu-dev \
    zip \
    unzip \
    libreoffice-writer-nogui \
    fonts-dejavu \
    fonts-liberation \
    && docker-php-ext-install \
        mysqli \
        pdo \
        pdo_mysql \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd \
        zip \
        intl \
    && a2enmod rewrite \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Set up custom php.ini configuration for larger uploads
RUN cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" && \
    echo "upload_max_filesize = 32M" >> "$PHP_INI_DIR/php.ini" && \
    echo "post_max_size = 32M" >> "$PHP_INI_DIR/php.ini" && \
    echo "memory_limit = 512M" >> "$PHP_INI_DIR/php.ini"

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy composer files
COPY composer.json composer.lock ./

# Install PHP dependencies
RUN COMPOSER_ALLOW_SUPERUSER=1 composer install \
    --no-interaction \
    --no-scripts \
    --optimize-autoloader

# Copy seluruh project
COPY . .

# Run composer scripts
RUN COMPOSER_ALLOW_SUPERUSER=1 composer run-script post-install-cmd --no-interaction 2>/dev/null || true

# Set permissions untuk writable folder dan semua files
RUN mkdir -p writable/cache writable/logs writable/session writable/uploads \
    && chmod -R 777 writable/ \
    && chown -R www-data:www-data /var/www/html \
    && chown -R www-data:www-data writable/

# Configure Apache for CodeIgniter 4 (point to public folder)
RUN echo '<VirtualHost *:80>\n\
    ServerAdmin admin@localhost\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        Options Indexes FollowSymLinks\n\
        AllowOverride All\n\
        Require all granted\n\
        <IfModule mod_rewrite.c>\n\
            RewriteEngine On\n\
            RewriteCond %{REQUEST_FILENAME} !-f\n\
            RewriteCond %{REQUEST_FILENAME} !-d\n\
            RewriteRule ^(.*) /index.php?/$1 [L]\n\
        </IfModule>\n\
    </Directory>\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf && \
    a2enmod rewrite

# Create EntryPoint Script
RUN printf '#!/bin/bash\n\
chown -R www-data:www-data /var/www/html\n\
chmod -R 777 /var/www/html/writable/\n\
exec apache2-foreground\n\
' > /entrypoint.sh && chmod +x /entrypoint.sh

# Expose port 80
EXPOSE 80

# Start Apache with EntryPoint
ENTRYPOINT ["/entrypoint.sh"]