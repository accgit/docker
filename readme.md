## Docker PHP
Docker configuration for your own server.

## Docker ldap for PHP
```
RUN apt install libldap2-dev -y
RUN docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu/
RUN docker-php-ext-install ldap
```

## Docker gd for PHP
```
RUN apt install libfreetype6-dev libjpeg62-turbo-dev libpng-dev -y
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd
```

# Docker php configuration for apache
```
COPY php.ini/ /etc/php/8.0/apache2/php.ini/
```

# Docker generate certificate for server

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
COPY 000-default.conf/ /etc/apache2/sites-available/
```
