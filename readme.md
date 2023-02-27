## Docker PHP
Docker configuration for your own server.

## Docker ldap for PHP
```
RUN apt install libldap2-dev -y
RUN docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu/
RUN docker-php-ext-install ldap
```

## Docker intl for PHP
```
RUN apt -y update \
&& apt install -y libicu-dev \
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl
```

## Docker gd for PHP
```
RUN apt install libfreetype6-dev libjpeg62-turbo-dev libpng-dev -y
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd
```

# Docker php configuration for apache
```
COPY conf/php.ini /usr/local/etc/php/conf.d
```

# Docker generate certificate for server

Add configure ssl for apache
```
RUN a2enmod ssl
```

# Docker copy certificate to container
```
COPY cert/* /etc/apache2/ssl/
```

The ports in Dockerfile:
```
EXPOSE 80 443
```

The ports in docker-compose.yml:
```
php:
    ports:
        - 443:443
```

Apache configuration ssl:

```
COPY conf/000-default.conf /etc/apache2/sites-available/
```
