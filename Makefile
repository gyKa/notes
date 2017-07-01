pre-install:
	cp .env.example .env

install:
	composer install
	php artisan migrate

update:
	git pull
	composer update
	php artisan migrate

server:
	php -S 0.0.0.0:8000 -t public
