
# install image from docker hub
FROM php:7.3.3-apache

# run update and upgrade
RUN apt-get update
RUN apt-get upgrade -y
RUN docker-php-ext-install mysqli

# enable apache modules
RUN a2enmod rewrite
RUN service apache2 restart

# the ports on which the container is listening
EXPOSE 80
