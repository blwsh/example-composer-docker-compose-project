FROM php:7.4-cli

RUN apt-get update && apt-get install -y git zip unzip && rm -rf /var/lib/apt/lists/*

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN composer self-update

COPY app /src
COPY . /package

WORKDIR /src

RUN composer install

CMD ["php", "index.php"]
