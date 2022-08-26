FROM debian:buster

RUN apt-get update -y &&\
    apt-get install -y mariadb-server mariadb-client

COPY script.sh /etc/script.sh
COPY 50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

ENTRYPOINT ["sh", "/etc/script.sh"]