pre-install:
	cp .env.example .env

install:
	composer install
	php artisan migrate

update:
	git pull
	composer uddate
	php artisan migrate

server:
	php -S localhost:8000 -t public
