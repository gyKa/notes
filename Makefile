pre-install:
	cp .env.example .env

install:
	php artisan migrate

update:
	git pull
	php artisan migrate

server:
	php -S localhost:8000 -t public
