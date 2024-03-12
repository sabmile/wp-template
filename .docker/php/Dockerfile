FROM php:8.1-fpm-alpine

RUN docker-php-ext-install pdo_mysql bcmath

ARG HOST_UID
RUN adduser --disabled-password --gecos "" --uid $HOST_UID wp

USER wp