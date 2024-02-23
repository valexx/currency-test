FROM phpdockerio/php:8.2-fpm
WORKDIR "/application"

ENV COMPOSER_NO_INTERACTION 1
ENV COMPOSER_VERSION 2.2.6

RUN apt-get update; \
    apt-get -y --no-install-recommends install \
        default-mysql-client \
        git \
        wget \
        supervisor \
        openssh-client \
        php8.2-gd \
        php8.2-mcrypt \
        php8.2-mysql \
        php8.2-intl \
        php8.2-gmp \
        php8.2-dom \
        php8.2-sqlite3 \
        php8.2-curl \
        php8.2-dom \
        php8.2-bcmath \
        php8.2-redis; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Install composer
RUN set -xe; \
    curl -sS https://getcomposer.org/installer | php -- --filename=composer --install-dir=/usr/local/bin --version=${COMPOSER_VERSION} > /dev/null 2>&1 && \
    chmod +x /usr/local/bin/composer

EXPOSE 9000
