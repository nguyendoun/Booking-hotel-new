#!/bin/sh
set -e

export PORT="${PORT:-10000}"
sed -i "s/^Listen .*/Listen ${PORT}/" /etc/apache2/ports.conf

cd /var/www/html

# The free instance has no persistent disk: start every boot from the seeded demo database.
cp database/seed.sqlite "$DB_DATABASE"

# No APP_KEY provided: generate one for this boot (sessions reset on restart).
if [ -z "$APP_KEY" ]; then
    export APP_KEY="base64:$(head -c 32 /dev/urandom | base64)"
fi

php artisan config:cache
php artisan view:cache

# Seeded users get random emails; give the admin (user 1) known credentials when provided.
if [ -n "$ADMIN_EMAIL" ] && [ -n "$ADMIN_PASSWORD" ]; then
    php artisan tinker --execute='App\Models\User::whereKey(1)->update(["email" => getenv("ADMIN_EMAIL"), "password" => bcrypt(getenv("ADMIN_PASSWORD"))]);'
fi
chown www-data:www-data "$DB_DATABASE"

chown -R www-data:www-data storage bootstrap/cache

exec "$@"
