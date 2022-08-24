FROM debian:buster

EXPOSE 443

RUN apt-get update -y &&\
    apt-get -y install nginx

COPY nginx.conf /etc/nginx/

RUN mkdir -p /var/www/html
RUN chown -R 0777 /var/www/html/

ENTRYPOINT ["nginx", "-g", "daemon off;"]