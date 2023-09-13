# Use the official PHP image as the base image
FROM php:8.2-apache

# Install required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set the working directory
WORKDIR /var/www/html

# Copy your PHP application files into the container
COPY . /var/www/html/

# Enable Apache rewrite module
RUN a2enmod rewrite

# Expose port 80 (HTTP)
EXPOSE 80

# Start Apache web server
CMD ["apache2-foreground"]
