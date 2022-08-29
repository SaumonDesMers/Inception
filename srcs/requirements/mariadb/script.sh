#!/bin/bash

touch tmp_file
chmod 755 tmp_file

cat << EOF > tmp_file
CREATE DATABASE inception;
USE inception;
FLUSH PRIVILEGES;
GRANT ALL ON *.* TO 'admin'@'localhost' IDENTIFIED BY 'cookie42admin' WITH GRANT OPTION;
GRANT ALL ON *.* TO 'sgaubert'@'%' IDENTIFIED BY 'password' WITH GRANT OPTION;
FLUSH PRIVILEGES;
EOF

# mysql --execute="SHOW DATABASES;"

cat tmp_file

mysqld --user=mysql --verbose --bootstrap < tmp_file
exec mysqld