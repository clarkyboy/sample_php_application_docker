FROM php:7.2-apache

RUN apt-get update && apt-get install -y
RUN docker-php-ext-install mysqli pdo_mysql

RUN mkdir /app \
    && mkdir /app/docker_php_mysql \
    && mkdir /app/docker_php_mysql/src

COPY src/ /app/docker_php_mysql/src/

RUN cp -r /app/docker_php_mysql/src/* /var/www/html/.