### Criando Container

docker run -d --name livrotdd --mount type=bind,source="$(pwd)",target=/var/www/html php-apache:1.0

### Executando testes

./vendor/bin/phpunit --colors tests