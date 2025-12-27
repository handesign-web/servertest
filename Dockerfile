FROM php:8.1-apache

# Install ekstensi mysqli agar bisa konek database
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

COPY src/ /var/www/html/
EXPOSE 80