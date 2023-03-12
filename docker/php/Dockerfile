FROM php:8.1.6-apache-buster

ENV COMPOSER_HOME=/var/lib/composer

COPY --from=composer:2.3.10 /usr/bin/composer /usr/bin/composer

