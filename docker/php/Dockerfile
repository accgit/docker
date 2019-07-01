
# image from docker hub
FROM php:7.3-apache

# run commands
RUN \
	apt-get update && apt-get upgrade -y && docker-php-ext-install mysqli && \
	a2enmod rewrite && service apache2 restart

# permission
RUN \
	chmod 777 -R /var/www/html/sandbox/log \
	chmod 777 -R /var/www/html/sandbox/temp

# the ports
EXPOSE 80
