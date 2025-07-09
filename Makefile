start:
	php artisan serve

lint:
	composer exec --verbose phpcs -- --standard=PSR12 app tests routes

lint-fix:
	composer exec --verbose phpcbf -- --standard=PSR12 app tests routes

setup:
	composer install
	cp -n .env.example .env
	php artisan key:generate --ansi
	touch database/database.sqlite
	php artisan migrate
	php artisan db:seed
	npm ci
	npm run build
	make ide-helper

install: # команда полезна при первом клонировании репозитория (или после удаления зависимостей)
	composer install

update: # обновить зависимости
	composer update

validate: # проверяет файл composer.json на ошибки
	composer validate

env:
	cp -n .env.example .env

- key:
	php artisan key:generate

db:
	php artisan migrate:fresh --seed

start-frontend:
	npm run dev

watch:
	npm run watch

migrate:
	php artisan migrate

console:
	php artisan tinker

log:
	tail -f storage/logs/laravel.log

test:
	php artisan test

test-coverage:
	XDEBUG_MODE=coverage php artisan test --coverage-clover build/logs/clover.xml

deploy:
	git push heroku

compose:
	docker-compose up

compose-test:
	docker-compose run web make test

compose-bash:
	docker-compose run web bash

compose-setup: compose-build
	docker-compose run web make setup

compose-build:
	docker-compose build

compose-db:
	docker-compose exec db psql -U postgres

compose-down:
	docker-compose down -v

ide-helper:
	php artisan ide-helper:eloquent
	php artisan ide-helper:gen
	php artisan ide-helper:meta
	php artisan ide-helper:mod -n
