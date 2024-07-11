FROM php:7.4-cli
COPY . /usr/src/dev-core-app
WORKDIR /usr/src/dev-core-app
CMD [ "php", "./main.php" ]
