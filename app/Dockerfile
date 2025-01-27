# Use the PHP 8.1 Apache base image
FROM php:8.1-apache

# Set environment variables
ENV APACHE_DOCUMENT_ROOT /app/public
ENV APACHE_SERVER_NAME localhost
ENV APP_URL $APP_URL
ENV DB_CONNECTION $DB_CONNECTION
ENV DB_HOST $DB_HOST
ENV DB_PORT $DB_PORT
ENV DB_DATABASE $DB_DATABASE
ENV DB_USERNAME $DB_USERNAME
ENV DB_PASSWORD $DB_PASSWORD
ENV TEST_DATABASE_URL $TEST_DATABASE_URL
ENV MAIL_DRIVER $MAIL_DRIVER
ENV MAIL_HOST $MAIL_HOST
ENV MAIL_PORT $MAIL_PORT

# Set working directory
WORKDIR /app

# Install additional dependencies and configure Apache
RUN apt-get update -y \
    && apt-get install -y git zip unzip libpng-dev libldap2-dev libzip-dev wait-for-it \
    && docker-php-ext-configure ldap --with-libdir="lib/$(gcc -dumpmachine)" \
    && docker-php-ext-install pdo_mysql gd ldap zip \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && a2enmod rewrite \
    && sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf \
    && echo "ServerName ${APACHE_SERVER_NAME}" >> /etc/apache2/apache2.conf 

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php \
    && mv composer.phar /usr/bin/composer \
    && php -r "unlink('composer-setup.php');"

# Use the default production configuration and update it as required
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
    && sed -i 's/memory_limit = 128M/memory_limit = 512M/g' "$PHP_INI_DIR/php.ini"

# Expose port 80
EXPOSE 80

# Copy entrypoint script
COPY ./dev/docker/entrypoint.app.sh /app/dev/docker/entrypoint.app.sh

# Set entrypoint
ENTRYPOINT ["/app/dev/docker/entrypoint.app.sh"]
