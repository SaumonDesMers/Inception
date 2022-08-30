cp /etc/nginx/wp-config.php .

echo checkpoint 1
wp core download --allow-root

echo checkpoint 2
until mysqladmin -hmysql -usgaubert -ppassword ping;
do
	echo "waiting to connect..."
	sleep 1
done

echo checkpoint 3
wp core install --url="localhost" --title="inception de ces morts" --admin_user="root" --admin_password="root" --admin_email="root@root.root" --allow-root

echo checkpoint 4

php-fpm7.3 -F -R