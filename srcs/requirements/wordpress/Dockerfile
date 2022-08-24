FROM debian:buster

EXPOSE 9000

RUN apt-get update -y &&\
    apt-get install -y curl php

COPY script.sh /etc/script.sh

# Wordpress-cli install guide :  https://make.wordpress.org/cli/handbook/guides/installing/

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
    php wp-cli.phar --info && \
    chmod +x wp-cli.phar && \
    mv wp-cli.phar /usr/local/bin/wp

CMD [ "sh", "/etc/script.sh" ]