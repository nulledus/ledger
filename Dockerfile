FROM php:8.4-fpm

# Get latest Composer from official composer image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install PDO MySQL (doesn't require network packages)
RUN docker-php-ext-install pdo_mysql

# Copy entrypoint script
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Set working directory
WORKDIR /var/www/html

# Expose port 9000
EXPOSE 9000

# Use custom entrypoint that installs dependencies at runtime
ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["php-fpm"]

