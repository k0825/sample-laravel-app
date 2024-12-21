FROM dunglas/frankenphp

RUN install-php-extensions \
  pcntl

#Composer install
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

COPY ./docker/php/php.ini /usr/local/etc/php/

COPY ./laravel-project /app
RUN chmod -R 777 /app
WORKDIR /app

RUN composer install
ENTRYPOINT ["php", "artisan", "octane:frankenphp"]