FROM php:8.1-fpm-alpine

RUN docker-php-ext-install pdo_mysql bcmath mysqli opcache

COPY ./conf/php.ini $PHP_INI_DIR/conf.d/opcache.ini

RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

ARG HOST_UID
RUN adduser --disabled-password --gecos "" --uid $HOST_UID wp

USER wp