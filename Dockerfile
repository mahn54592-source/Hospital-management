FROM php:8.2-apache

WORKDIR /var/www/html

#copy project files to container
COPY . .

RUN docker-php-ext-install mysqli

RUN a2enmod rewrite

# Set permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
CMD ["apache2-foreground"]