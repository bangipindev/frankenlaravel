FROM dunglas/frankenphp

COPY composer.* /app

WORKDIR /app

COPY . /app

RUN apt-get update && apt-get install -y \
    $PHPIZE_DEPS \
    libzip-dev \
    zip unzip git curl \
    libpng-dev libjpeg62-turbo-dev libfreetype6-dev \
    libpq-dev pkg-config \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip pcntl pdo pdo_mysql pdo_pgsql \
    && docker-php-ext-enable zip
    
RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

COPY . .

COPY --chown=www:www . .

USER www

EXPOSE 8000

CMD ["frankenphp", "run", "--config=/app/Caddyfile"]