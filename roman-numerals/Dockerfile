FROM php:8.3

LABEL  org.opencontainers.image.authors="info@codium.team"

# Composer and dependencies
RUN apt update && \
    apt install git unzip -y
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/local/bin/composer

RUN pecl install xdebug-3.3.2 && docker-php-ext-enable xdebug
RUN echo "xdebug.mode=coverage" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Volume to have access to the source code
VOLUME ["/opt/project"]

WORKDIR /opt/project