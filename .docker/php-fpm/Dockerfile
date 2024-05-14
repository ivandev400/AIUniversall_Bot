FROM php:8.2-fpm

RUN apt-get update

# Install additional dependencies
RUN apt-get install -y \
    libxml2-dev \
    libcurl4-openssl-dev

# Install PHP extensions
RUN docker-php-ext-install \
    xml \
    dom \
    curl

# Clean up
RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Set the working directory
WORKDIR /var/www/html

# Expose port 9000 to communicate with Nginx or other web servers
EXPOSE 9000

# Start PHP-FPM server
CMD ["php-fpm"]