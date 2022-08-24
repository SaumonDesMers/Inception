touch tmp_file
chmod 755 tmp_file

cat << EOF > tmp_file
CREATE DATABASE IF NOT EXISTS inception
GRANT ALL ON *.* TO 'admin'@'localhost' IDENTIFIED BY 'cookie42admin' WITH GRANT OPTION;
FLUSH PRIVILEGES;
EOF

cat tmp_file

mysqld < tmp_file
exec usr/bin/mysqld_safe --datadir=/var/lib/mysql