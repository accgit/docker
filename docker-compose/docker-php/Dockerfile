# image from docker hub
FROM php:8.0-apache

# build-time customization
ARG DEBIAN_FRONTEND=noninteractive

# run commands
RUN apt update && apt upgrade -y && a2enmod rewrite
RUN echo "<?php echo phpinfo(); ?>" > /var/www/html/index.php

# the ports
EXPOSE 80
