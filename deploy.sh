#!/bin/sh
# activate maintenance mode
sudo php artisan down
# update source code
sudo git pull
# update PHP dependencies
sudo composer install --no-interaction --no-dev --prefer-dist
# --no-interaction Do not ask any interactive question
# --no-dev  Disables installation of require-dev packages.
# --prefer-dist  Forces installation from package dist even for dev versions.
# update database
sudo php artisan migrate --force
# --force  Required to run when in production.
# stop maintenance mode
sudo php artisan up