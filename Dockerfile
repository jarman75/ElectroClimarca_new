FROM php:7.0-apache

# Copy application source
COPY src /var/www/html
EXPOSE 80


