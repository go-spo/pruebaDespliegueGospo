#!/bin/bash

docker exec -t gospoPrueba-mysql /bin/bash
mysql  -u root -proot -h localhost -P 3306 < /database/Gospo-ultima.sql
mysql -u root -proot -h localhost -P 3306  gosport < /database/cargaDatosV8.sql

chmod +x import.sh