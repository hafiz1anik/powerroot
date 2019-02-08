FROM php:5.6-apache
COPY config/php.ini /usr/local/etc/php/
RUN apt-get update && apt-get install -y libpq-dev
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN a2enmod rewrite && service apache2 restart