FROM php:8.2-fpm-alpine

RUN apk --no-cache update \
    && apk --no-cache upgrade \
    && apk add --update linux-headers \
    && apk add --no-cache $PHPIZE_DEPS \
    libc-dev \
    libzip-dev \
    libpng-dev \
    imagemagick-dev \
    libmcrypt-dev \
    gcc make autoconf git vim

RUN docker-php-ext-configure zip \
  && docker-php-ext-install -j "$(nproc)" zip \
  && docker-php-ext-configure gd \
  && docker-php-ext-install -j "$(nproc)" gd \
  && docker-php-ext-configure pdo_mysql \
  && docker-php-ext-install -j "$(nproc)" pdo_mysql \
  && pecl install mcrypt xdebug imagick \
  && docker-php-ext-enable mcrypt xdebug imagick

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- \
        --filename=composer \
        --install-dir=/usr/local/bin && \
    composer clear-cache

COPY php82-fpm/php.ini /usr/local/etc/php/conf.d/90-php.ini

WORKDIR "/app"
EXPOSE 9000
