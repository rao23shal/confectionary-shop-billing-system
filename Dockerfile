# Use official PHP + Apache image
FROM php:8.1-apache

# Install mysqli and pdo_mysql extensions (and other common deps)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy project files into Apache web root
COPY . /var/www/html/

# Ensure Apache serves the folder and enable rewrite (optional)
RUN a2enmod rewrite

# Fix permissions (optional)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 (default Apache)
EXPOSE 80

# Start Apache in foreground (official image CMD)
CMD ["apache2-foreground"]
