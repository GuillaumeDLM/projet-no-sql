FROM php:8.0-apache

ENV COMPOSER_ALLOW_SUPERUSER=1

EXPOSE 80
WORKDIR /app

# MongoDB Extension
# RUN apt-get update && \
#    apt-get install -y openssl libssl-dev libcurl4-openssl-dev && \
#    pecl install mongodb-1.11.1


RUN apt-get update && \
    apt-get install iputils-ping libcap2 libcap2-bin libpam-cap

# git, unzip & zip are for composer
RUN apt-get update -qq && \
    apt-get install -qy \
    git \
    gnupg \
    unzip \
    zip && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Elasticsearch/MongoDB Library
# RUN composer require elasticsearch/elasticsearch && \
# composer require mongodb/mongodb:1.10.1 && \

# PHP Extensions
RUN docker-php-ext-install -j$(nproc) opcache pdo_mysql
# docker-php-ext-enable mongodb
COPY conf/php.ini /usr/local/etc/php/conf.d/app.ini

# Apache
COPY ./app/ /app/
COPY ./composer.json /app/
COPY ./errors /errors
COPY ./conf/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY ./conf/apache.conf /etc/apache2/conf-available/z-app.conf

RUN composer install && \
    apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN a2enmod rewrite remoteip && \
    a2enconf z-app