# image from docker hub
FROM php:7.3-apache

# run commands
RUN apt-get update && apt-get upgrade -y && a2enmod rewrite && apt-get install -y libaio1
RUN echo "<?php echo phpinfo(); ?>" > /var/www/html/index.php

# add files to tmp
ADD oracle/oracle-instantclient12.2-basic_12.2.0.1.0-2_amd64.deb /tmp
ADD oracle/oracle-instantclient12.2-devel_12.2.0.1.0-2_amd64.deb /tmp
ADD oracle/oracle-instantclient12.2-sqlplus_12.2.0.1.0-2_amd64.deb /tmp

# install client
RUN dpkg -i /tmp/oracle-instantclient12.2-basic_12.2.0.1.0-2_amd64.deb
RUN dpkg -i /tmp/oracle-instantclient12.2-devel_12.2.0.1.0-2_amd64.deb
RUN dpkg -i /tmp/oracle-instantclient12.2-sqlplus_12.2.0.1.0-2_amd64.deb

# remove files from tmp
RUN rm -rf /tmp/oracle-instantclient12.2-*.deb

# oracle environment
ENV LD_LIBRARY_PATH /usr/lib/oracle/12.2/client64/lib/
ENV ORACLE_HOME /usr/lib/oracle/12.2/client64/lib/

# configure oracle for php
RUN echo 'instantclient,/usr/lib/oracle/12.2/client64/lib' | pecl install oci8 && docker-php-ext-enable oci8

# copy files and directory
COPY sandbox/ /var/www/html/sandbox

# permission settings
RUN \
	chmod 777 /var/www/html/sandbox/temp && \
	chmod 777 /var/www/html/sandbox/log

# the ports
EXPOSE 80
