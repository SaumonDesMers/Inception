#!/bin/bash

cp /wp-config.php .

echo checkpoint 1
wp core download --allow-root

echo checkpoint 2
until mysqladmin -hmysql -u$DB_USER_LOGIN -p$DB_USER_PASSWORD ping;
do
	echo "waiting to connect..."
	sleep 1
done

echo checkpoint 3
wp core install --url="sgaubert.42.fr" --title="inception de ces morts"\
	--admin_user=$WP_ADMIN_LOGIN --admin_password=$WP_ADMIN_PASSWORD --admin_email="root@root.root" --allow-root

if [[ ! $(wp user get $WP_USER_LOGIN --allow-root) ]]
then
	wp user create $WP_USER_LOGIN example@nothing.nada --user_pass=$WP_USER_PASSWORD --allow-root
fi

echo checkpoint 4

php-fpm7.3 -F -R