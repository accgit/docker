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
