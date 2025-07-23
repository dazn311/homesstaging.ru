FROM php:8-cli

RUN apt-get -y update \
    # required for pdo_pgsql
    && apt-get install -y libpq-dev \
    && pecl install xdebug \
    && docker-php-ext-install pdo_mysql pdo_pgsql \
    && docker-php-ext-enable xdebug \
    && apt-get clean
