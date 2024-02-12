FROM php:8.3.1-apache

WORKDIR /var/www/html

RUN a2enmod rewrite

RUN apt-get update \
    && apt-get install -y git zip unzip curl \
    && curl -fsSL https://deb.nodesource.com/setup_21.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm@latest

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');" \
    && mkdir -p /var/www/html/templates/cache && chmod -R 777 /var/www/html/templates/cache

COPY . /var/www/html

EXPOSE 80