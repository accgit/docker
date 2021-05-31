# image from docker hub
FROM php:8.0-apache
MAINTAINER Zdeněk Papučík <zdenek.papucik@gmail.com>

# build-time customization
ARG DEBIAN_FRONTEND=noninteractive

# run commands
RUN apt update && apt upgrade -y && a2enmod rewrite
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# php extensions
RUN docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd \
    && docker-php-ext-configure mysqli --with-mysqli=mysqlnd \
    && docker-php-ext-install pdo pdo_mysql mysqli \
    && docker-php-ext-enable mysqli

# copy files and directory
COPY sandbox/ /var/www/html/sandbox

# permission settings
RUN \
	chmod 777 /var/www/html/sandbox/temp && \
	chmod 777 /var/www/html/sandbox/log

# the ports
EXPOSE 80
