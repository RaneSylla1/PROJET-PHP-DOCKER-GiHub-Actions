FROM php:8.2-apache

COPY ./src /var/www/html/ 

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN a2enmod rewrite

COPY Docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80