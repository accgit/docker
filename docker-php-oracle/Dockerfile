# image from docker hub
FROM php:8.0-apache

# build-time customization
ARG DEBIAN_FRONTEND=noninteractive

# run commands
RUN apt update && apt upgrade -y && apt-get install libaio1 -y && a2enmod rewrite
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN echo "<?php echo phpinfo(); ?>" > /var/www/html/info.php

# copy files to tmp
ADD oracle/oracle-instantclient12.2-basic_12.2.0.1.0-2_amd64.deb/ /tmp
ADD oracle/oracle-instantclient12.2-devel_12.2.0.1.0-2_amd64.deb/ /tmp
ADD oracle/oracle-instantclient12.2-sqlplus_12.2.0.1.0-2_amd64.deb/ /tmp

# install oracle client
RUN dpkg -i /tmp/oracle-instantclient12.2-basic_12.2.0.1.0-2_amd64.deb
RUN dpkg -i /tmp/oracle-instantclient12.2-devel_12.2.0.1.0-2_amd64.deb
RUN dpkg -i /tmp/oracle-instantclient12.2-sqlplus_12.2.0.1.0-2_amd64.deb

# remove files from tmp
RUN rm -rf /tmp/oracle-instantclient12.2-*.deb

# oracle environment
ENV LD_LIBRARY_PATH /usr/lib/oracle/12.2/client64/lib/
ENV ORACLE_HOME /usr/lib/oracle/12.2/client64/lib/

# configure client for php
RUN echo 'instantclient,/usr/lib/oracle/12.2/client64/lib' | pecl install oci8 && docker-php-ext-enable oci8

# copy files and directory
COPY sandbox/ /var/www/html/sandbox

# permission settings
RUN \
	chmod 777 /var/www/html/sandbox/temp && \
	chmod 777 /var/www/html/sandbox/log

# the ports
EXPOSE 80
