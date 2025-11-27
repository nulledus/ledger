FROM php:8.1-fpm

# Get latest Composer from official composer image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install only essential dependencies for Laravel package development
RUN apt-get update && apt-get install -y \
#    libzip-dev \
#    unzip \
#    && apt-get clean \
#    && rm -rf /var/lib/apt/lists/*

# Install only essential PHP extensions
#RUN docker-php-ext-install pdo_mysql zip

# Copy entrypoint script
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Set working directory
WORKDIR /var/www/html

# Expose port 9000
EXPOSE 9000

# Use custom entrypoint
ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["php-fpm"]

