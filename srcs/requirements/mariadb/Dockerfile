FROM debian:buster

RUN apt-get update -y &&\
    apt-get install -y mariadb-server mariadb-client

COPY script.sh /etc/script.sh

ENTRYPOINT ["sh", "/etc/script.sh"]