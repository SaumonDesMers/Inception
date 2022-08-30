FROM debian:buster

RUN apt-get update -y &&\
    apt-get -y install nginx openssl

COPY nginx.conf /etc/nginx/conf.d/default.conf

RUN mkdir -p /var/www/html &&\
    chmod -R 777 /var/www/html

RUN mkdir -p /etc/nginx/ssl/private &&\
    mkdir -p /etc/nginx/ssl/certs

RUN openssl req -x509 -newkey rsa:4096 -sha256 -days 365 -nodes \
    -out /etc/nginx/ssl/certs/sgaubert.pem \
    -keyout /etc/nginx/ssl/private/sgaubert.key \
    -subj "/C=FR/ST=Paris/L=Paris/O=42 School/OU=sgaubert.42.fr/CN=sgaubert.42.fr/"

EXPOSE 443

ENTRYPOINT ["nginx", "-g", "daemon off;"]