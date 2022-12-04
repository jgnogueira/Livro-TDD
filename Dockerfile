FROM php:8.0-apache

RUN apt-get update && apt-get install -y curl zip unzip && apt-get clean -y

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer