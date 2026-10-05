FROM composer:2 AS vendor
WORKDIR /app
COPY composer.json composer.lock ./
# Dev packages stay in: the seeders need Faker to build the demo database.
RUN composer install --no-interaction --no-scripts --no-autoloader --prefer-dist --ignore-platform-reqs

FROM php:8.4-apache
RUN apt-get update \
    && apt-get install -y --no-install-recommends libpng-dev libjpeg62-turbo-dev libfreetype6-dev libsqlite3-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo_sqlite \
    && a2enmod rewrite \
    && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
    && rm -rf /var/lib/apt/lists/*

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
COPY docker/apache.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
COPY . .
COPY --from=vendor /app/vendor ./vendor
RUN composer dump-autoload --optimize --no-interaction

# Bake a seeded SQLite database into the image; the entrypoint copies it to a writable path on boot.
ENV APP_ENV=production \
    APP_DEBUG=false \
    LOG_CHANNEL=stderr \
    DB_CONNECTION=sqlite \
    DB_DATABASE=/var/www/html/database/seed.sqlite
RUN cp .env.example .env \
    && sed -i -E '/^(APP_ENV|APP_DEBUG|APP_URL|LOG_CHANNEL|DB_[A-Z]+)=/d' .env \
    && php artisan key:generate --force \
    && touch database/seed.sqlite \
    && php artisan migrate --seed --force \
    && rm .env

COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh
ENV DB_DATABASE=/var/www/html/storage/database.sqlite
EXPOSE 10000
ENTRYPOINT ["entrypoint.sh"]
CMD ["apache2-foreground"]
