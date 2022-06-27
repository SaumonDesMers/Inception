FROM debian:buster

# network port
# EXPOSE 80
# ssl port
EXPOSE 443

# update nginx

RUN apt-get update &&\
   apt-get install nginx openssl gettext -y && \
   rm -rf /var/lib/apt/lists/*


# creating directory for the website
RUN mkdir -p /var/www/html/
# Add infos about my domain
ARG DOMAIN_NAME
ARG NGINX_CERT
ARG NGINX_KEY

# Copy of nginx conf
COPY ./nginx.conf.template /etc/nginx/template

RUN chmod -R 777 /var/lib/nginx
RUN chmod -R 777 /var/www/html

# SSL creating repos
RUN mkdir -p /etc/nginx/ssl/private &&\
    mkdir -p /etc/nginx/ssl/certs

# SSL generating cert
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048  \
        -out /etc/nginx/ssl/certs/sgaubert.pem \
        -keyout /etc/nginx/ssl/private/sgaubert.key \
        -subj "/C=FR/ST=Paris/L=Paris/O=42 School/OU=sgaubert.42.fr/CN=sgaubert.42.fr/"

RUN mkdir -p /run/nginx
COPY nginx.conf /etc/nginx/conf.d/default.conf

CMD ["nginx", "-g", "daemon off;"]