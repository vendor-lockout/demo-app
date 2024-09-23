############################################
# Base Image
############################################

# Learn more about the Server Side Up PHP Docker Images at:
# https://serversideup.net/open-source/docker-php/
FROM serversideup/php:8.3-fpm-nginx-alpine AS base

############################################
# Development Image
############################################
FROM base AS development

# We can pass USER_ID and GROUP_ID as build arguments
# to ensure the www-data user has the same UID and GID
# as the user running Docker.
ARG USER_ID
ARG GROUP_ID

# Switch to root so we can set the user ID and group ID
# Set the user ID and group ID for www-data
RUN docker-php-serversideup-set-id www-data $USER_ID:$GROUP_ID  && \
    docker-php-serversideup-set-file-permissions --owner $USER_ID:$GROUP_ID --service nginx

# Drop privileges back to www-data
USER www-data

############################################
# Production Image
############################################
FROM base AS deploy

# Copy composer files

COPY --chown=www-data:www-data composer.json composer.lock /var/www/html/

# Install Composer
RUN composer install --no-dev --no-interaction --no-progress --no-autoloader

# Copy the application files
COPY --chown=www-data:www-data . /var/www/html

# Dump the Composer autoloader
RUN composer dump-autoload --optimize

# Ensure PHP-FPM gracefully stops
STOPSIGNAL SIGQUIT

USER www-data

ENV PHP_OPCACHE_ENABLE=1
