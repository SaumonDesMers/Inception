FROM	debian:buster

EXPOSE 3306

RUN		apt-get update -y
RUN		apt-get install -y mariadb-server
RUN 	apt-get install -y mariadb-client

COPY	server.conf /etc/mysql/mariadb.conf.d/server.conf

RUN 	mkdir -p /var/run/mysqld/
RUN		mkdir -p /run/mysqld/ && chown -R mysql:root /run/mysqld

COPY 	script.sh /var/

RUN     chmod -R 755 /var/lib/mysql
RUN     chmod 755 /var/script.sh

CMD 	["sh", "/var/script.sh"]