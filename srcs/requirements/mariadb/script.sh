#!/bin/bash

touch tmp_file
chmod 755 tmp_file

cat << EOF > tmp_file
CREATE DATABASE IF NOT EXISTS $DB_NAME;
USE $DB_NAME;
FLUSH PRIVILEGES;
GRANT ALL ON *.* TO '$DB_ADMIN_LOGIN'@'localhost' IDENTIFIED BY '$DB_ADMIN_LOGIN' WITH GRANT OPTION;
GRANT ALL ON $DB_NAME.* TO '$DB_USER_LOGIN'@'%' IDENTIFIED BY '$DB_USER_PASSWORD' WITH GRANT OPTION;
FLUSH PRIVILEGES;
EOF

cat tmp_file

mysqld --user=mysql --verbose --bootstrap < tmp_file

rm tmp_file

exec mysqld