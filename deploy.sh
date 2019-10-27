#!/bin/sh
# activate maintenance mode
/opt/bitnami/php/bin/php artisan down
# update source code
/usr/bin/git pull
# update PHP dependencies
/opt/bitnami/php/bin/composer install --no-interaction --no-dev --prefer-dist
# --no-interaction Do not ask any interactive question
# --no-dev  Disables installation of require-dev packages.
# --prefer-dist  Forces installation from package dist even for dev versions.
# update database
/opt/bitnami/php/bin/php artisan migrate --force
# --force  Required to run when in production.
# stop maintenance mode
/opt/bitnami/php/bin/php artisan up