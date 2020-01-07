install:
	docker rm -f tmp_install || true
	docker-compose -f docker-compose.install.yml build
	docker-compose -f docker-compose.install.yml run -d --rm --no-deps --name tmp_install app
	docker cp tmp_install:/src/vendor ./app
	docker stop tmp_install
