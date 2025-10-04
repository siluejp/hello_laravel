# ./docker/php/Dockerfile
FROM php:7.2-fpm
RUN sed -i 's|http://deb.debian.org/debian|http://archive.debian.org/debian|g; s|http://security.debian.org/debian-security|http://archive.debian.org/debian-security|g' /etc/apt/sources.list \
 && apt update -o Acquire::Check-Valid-Until=false \
 && apt install -y git unzip \
 && docker-php-ext-install pdo_mysql \
 && curl -sS https://getcomposer.org/installer | php \
 && mv composer.phar /usr/local/bin/composer
WORKDIR /var/www/html
COPY composer.json composer.lock ./
RUN composer install --no-ansi --no-dev --no-interaction --no-progress --optimize-autoloader
COPY . /var/www/html/
