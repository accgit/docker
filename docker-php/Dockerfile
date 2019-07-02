# image from docker hub
FROM php:7.3-apache

# run commands
RUN \
	apt-get update && apt-get upgrade -y && docker-php-ext-install mysqli && \
	a2enmod rewrite && service apache2 restart

# copy files and directory
COPY index.php /var/www/html
COPY sandbox/ /var/www/html/sandbox

# permission settings
RUN \
	chmod 777 /var/www/html/sandbox/temp && \
	chmod 777 /var/www/html/sandbox/log

# the ports
EXPOSE 80
