#!/bin/bash

cd ..
cd ..
mkdir www
mkdir database
mkdir mysql
cp -r /opt/gospo/pruebaDespliegueGospo/database/* /opt/gospo/mysql
cp -r /opt/gospo/pruebaDespliegueGospo/* /opt/gospo/www
cd www
rm -rf database
rm -rf docs
rm -rf despliegue
docker run -d -p 80:8080 --net=red_docker --ip 192.168.1.68 --name gospo -v /opt/gospo/www:/var/www logongas/apache2-php7-ssl
docker run -d -p 3306:3306 --net=red_docker --ip 192.168.1.69 --name gospo-mysql -v /opt/gospo/mysql:/var/lib/mysql -v /opt/gospo/database:/database  -e MYSQL_ROOT_PASSWORD=root mysql
cd database
./import.sh

chmod +x import.sh