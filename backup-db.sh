#!/bin/sh
DIR=`echo $(pwd) | awk -F "/" '{ print $NF }'`
docker exec -it $(docker-compose --project-name ${DIR} ps -q db) sh -c 'mysqldump -u wordpress -p wordpress  2> /dev/null > /docker-entrypoint-initdb.d/wordpress.sql'

