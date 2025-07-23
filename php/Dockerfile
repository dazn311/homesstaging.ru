#FROM php8.1-pdo-mysql
FROM php:8.2-fpm
#FROM php:8.2-cli
#COPY . /var/www/html/homes_staging
WORKDIR /var/www/html


ENV PHP_MEMORY_LIMIT=1G
ENV PHP_UPLOAD_MAX_FILESIZE: 512M
ENV PHP_POST_MAX_SIZE: 512M
ENV PHP_IDE_CONFIG: 512M

RUN #docker-php-ext-install mysqli pdo pdo_mysql

RUN apt-get -y update \
    # required for pdo_pgsql
    && apt-get install -y libpq-dev \
    && pecl install xdebug \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && docker-php-ext-enable xdebug \
    && apt-get clean

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

#RUN php /var/www/html/homes_staging/bin/mysql_create.php
#RUN php /bin/registration.php

#CMD [ "php", "/var/www/html/homes_staging/bin/mysql_create.php" ]
#CMD [ "php", "/var/www/html/homes_staging/bin/registration.php" ]
#CMD ["php", "-S", "0.0.0.0:80", "-t", "/bin", "/bin/mysql_create.php"]
#good;
#ENTRYPOINT ["/bin/bash", "-c", "php /var/www/html/homes_staging/bin/mysql_create.php"]
ENTRYPOINT ["/bin/bash", "-c", "php /var/www/html/homes_staging/bin/registration.php"]
#ENTRYPOINT ["/bin/bash", "-c", "php ./bin/registration.php"]



