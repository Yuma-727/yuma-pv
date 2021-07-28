up:
	docker-compose up -d

stop:
	docker-compose stop

down:
	docker-compose down

sass:
	sass --watch ./wp-content/themes/sass/style.scss:./wp-content/themes/style.css --style expanded

init:
	docker-compose up -d

