## Docker PHP
Setting docker for php server.

- [Docker PHP server](https://github.com/accgit/docker/tree/master/docker-php)
- [Docker Compose PHP server](https://github.com/accgit/docker/tree/master/docker-php-compose)
- [Docker PHP Oracle Client](https://github.com/accgit/docker/tree/master/docker-oracle)
- [Docker MySQL](https://github.com/accgit/docker/tree/master/docker-mysql-compose)

## Docker LDAP for PHP
```
RUN apt-get install libldap2-dev -y
RUN docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu/
RUN docker-php-ext-install ldap
```

## Docker imagick for PHP
```
RUN apt-get install -y zlib1g-dev libxml2-dev libfreetype6-dev libjpeg62-turbo-dev libmcrypt-dev libpng12.0 imagemagick
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd
```
