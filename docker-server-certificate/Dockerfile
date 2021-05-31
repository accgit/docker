FROM ubuntu:groovy

RUN apt update && apt upgrade -y && apt install build-essential checkinstall zlib1g-dev wget -y
RUN wget https://www.openssl.org/source/openssl-1.1.1c.tar.gz
RUN mkdir /opt/openssl && tar xfvz openssl-1.1.1c.tar.gz --directory /opt/openssl
RUN cd /opt/openssl/openssl-1.1.1c && ./config --prefix=/opt/openssl --openssldir=/opt/openssl/ssl

WORKDIR cert

COPY server.csr.cnf/ /cert/
COPY v3.ext/ /cert/

RUN openssl genrsa -des3 -passout pass:pass -out rootCA.key 2048
RUN openssl rsa -passin pass:pass -in rootCA.key -out rootCA.server.key
RUN openssl req -x509 -new -nodes -key rootCA.server.key -sha256 -days 2000 -out rootCA.pem -subj "/C=CS/ST=Czech-Republic/L=Prague/O=IT/OU=Development/CN=example.com"
RUN openssl req -new -sha256 -nodes -out server.csr -newkey rsa:2048 -keyout server.key -config server.csr.cnf
RUN openssl x509 -req -in server.csr -CA rootCA.pem -CAkey rootCA.server.key -CAcreateserial -out server.crt -days 500 -sha256 -extfile v3.ext

CMD cp /cert/* /certs
