# image from docker hub
FROM php:7.3-apache

# run commands
RUN apt-get update && apt-get upgrade -y && a2enmod rewrite
RUN echo "<?php echo phpinfo(); ?>" > /var/www/html/index.php

# the ports
EXPOSE 80
