FROM debian:buster

EXPOSE 9000

# php requirement : https://make.wordpress.org/hosting/handbook/server-environment/

RUN apt-get update -y &&\
    apt-get install -y mariadb-client curl php php7.3 php7.3-fpm php7.3-mysql php-common php7.3-cli php7.3-common php7.3-json php7.3-opcache php7.3-readline php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip

COPY www.conf /etc/php/7.3/fpm/pool.d/

RUN mkdir -p /var/run && \
    mkdir /run/php && \
    mkdir -p /var/www/html/

COPY script.sh /etc/script.sh
COPY wp-config.php /var/www/

# Wordpress-cli install guide :  https://make.wordpress.org/cli/handbook/guides/installing/

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
    php wp-cli.phar --info && \
    chmod +x wp-cli.phar && \
    mv wp-cli.phar /usr/local/bin/wp

WORKDIR /var/www/

CMD [ "sh", "/etc/script.sh" ]