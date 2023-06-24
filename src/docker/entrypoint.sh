#!/bin/sh

# Wait for MySQL and run migrations and database import
./docker/wait-for-mysql.sh mysql && php artisan migrate && php artisan db:import backup.sql

# Start PHP-FPM
php-fpm