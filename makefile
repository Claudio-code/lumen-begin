start:
	docker-compose up -d

build:
	docker-compose up -d --build

down:
	docker-compose down

stop:
	docker-compose stop

rm:
	docker-compose rm

run-all-tests:
	docker exec -it lumen-app bash -c  "vendor/bin/phpunit"

fix-all:
	docker exec -it lumen-app bash -c  "composer run-script php-cs-fixer"

