dev.build:
	docker-compose pull
	docker-compose up --build -d

	docker exec sattrak_php sh -c 'composer install --no-interaction'
	docker exec sattrak_php sh -c 'bin/console doctrine:migration:migrate --no-interaction'

dev.bash:
	docker exec -it sattrak_php /bin/bash
