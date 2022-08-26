FROM debian:buster

RUN apt-get update -y &&\
    apt-get -y install nginx

COPY nginx.conf /etc/nginx/

RUN mkdir -p /var/www/html
RUN chown -R 0777 /var/www/html/

EXPOSE 80

ENTRYPOINT ["nginx", "-g", "daemon off;"]