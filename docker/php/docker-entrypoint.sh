#!/bin/sh
set -e

if [ ! -f /var/www/html/vendor/autoload.php ]; then
  echo "vendor/autoload.php not found; running composer install..."
  composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev
fi

exec "$@"
