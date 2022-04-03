start: 
	cd ./public_html/ && php -S 127.0.0.1:4000 && ../
	
docker: MysqlDocker/docker-compose.yml
	docker-compose -f MysqlDocker/docker-compose.yml up -d
	echo "wait 2 minutes"

docker-stop: 
	docker container stop mysql_container 
 
docker-start: 
	docker container start mysql_container 

docker-remove:
	docker container stop mysql_container
	docker container rm -v mysql_container

mysql-dump: MysqlDocker/init/dataBaseDump.sql
	rm -r MysqlDocker/init/dataBaseDump.sql
	mysql -uroot -proot -h127.0.0.1 -P3307 laptop_repair > MysqlDocker/init/dataBaseDump.sql

mysql-restore: MysqlDocker/backup/dataBaseDump.sql
	rm -r MysqlDocker/init/dataBaseDump.sql
	cp MysqlDocker/backup/dataBaseDump.sql MysqlDocker/init/



