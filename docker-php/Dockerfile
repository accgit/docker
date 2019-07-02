# image from docker hub
FROM php:7.3-apache

# run commands
RUN apt-get update && apt-get upgrade -y && a2enmod rewrite
RUN echo "<?php echo phpinfo(); ?>" > /var/www/html/index.php

# copy files and directory
COPY sandbox/ /var/www/html/sandbox
COPY index.php /var/www/html

# permission settings
RUN \
	chmod 777 /var/www/html/sandbox/temp && \
	chmod 777 /var/www/html/sandbox/log

# the ports
EXPOSE 80
