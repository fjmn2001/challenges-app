current-dir := $(dir $(abspath $(lastword $(MAKEFILE_LIST))))

up:
	./vendor/bin/sail up -d

deps: composer-install

# 🐘 Composer
composer-env-file:
	@if [ ! -f .env ]; then echo '' > .env; fi

composer-install: CMD=install
composer-update: CMD=update
composer-require: CMD=require
composer-require: INTERACTIVE=-ti --interactive
composer-require-module: CMD=require $(module)
composer-require-module: INTERACTIVE=-ti --interactive
composer composer-install composer-update composer-require composer-require-module: composer-env-file
	@docker run --rm \
                --user $(id -u):$(id -g) \
                --volume $(current-dir):/opt \
                -w /opt \
                laravelsail/php80-composer:latest \
                composer install --ignore-platform-reqs --no-ansi

reload: composer-env-file
	@docker-compose exec php-fpm kill -USR2 1
	@docker-compose exec nginx nginx -s reload

test:
	echo $(pwd)

