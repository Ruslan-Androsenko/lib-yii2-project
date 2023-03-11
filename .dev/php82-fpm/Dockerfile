FROM php:8.2-fpm-alpine

RUN apk --no-cache update \
    && apk --no-cache upgrade \
    && apk add --update linux-headers \
    && apk add --no-cache $PHPIZE_DEPS \
    icu-dev \
    libc-dev \
    libzip-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    imagemagick-dev \
    libmcrypt-dev \
    postgresql-dev \
    gcc make autoconf git vim

RUN docker-php-ext-install gd pdo pdo_pgsql pdo_mysql intl zip \
  && pecl install mcrypt xdebug imagick memcache \
  && docker-php-ext-enable mcrypt xdebug imagick memcache

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- \
        --filename=composer \
        --install-dir=/usr/local/bin && \
    composer clear-cache

COPY php82-fpm/php.ini /usr/local/etc/php/conf.d/90-php.ini

WORKDIR "/app"
EXPOSE 9000
