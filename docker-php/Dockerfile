# image from docker hub
FROM php:8.0-apache

# build-time customization
ARG DEBIAN_FRONTEND=noninteractive

# run commands
RUN apt-get update && a2enmod rewrite
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN echo "<?php echo phpinfo(); ?>" > /var/www/html/info.php

# copy files and directory
COPY sandbox/ /var/www/html/sandbox

# permission settings
RUN \
	chmod 777 /var/www/html/sandbox/temp && \
	chmod 777 /var/www/html/sandbox/log

# the ports
EXPOSE 80
