FROM php:7.2-fpm
RUN apt-get update \
    && apt-get install -y libpq-dev
RUN docker-php-ext-install pdo \
    && docker-php-ext-enable pdo
RUN docker-php-ext-install pdo_pgsql \
    && docker-php-ext-enable pdo_pgsql
RUN docker-php-ext-install pdo_mysql \
    && docker-php-ext-enable pdo_mysql
RUN docker-php-ext-install mysqli \
    && docker-php-ext-enable mysqli