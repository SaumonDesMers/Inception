FROM debian:buster

RUN apt-get update -y &&\
    apt-get install -y mariadb-server mariadb-client

RUN mkdir -p /run/mysqld && chown mysql:root /run/mysqld

COPY script.sh /etc/script.sh
COPY 50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

ENTRYPOINT ["sh", "/etc/script.sh"]