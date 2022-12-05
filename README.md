### Construindo Imagem

docker build -t php-apache:1.0 .

### Criando Container

docker run -d --name livrotdd --mount type=bind,source="$(pwd)",target=/var/www/html php-apache:1.0

### Instalando dependências

docker exec -it livrotdd composer install

### Executando testes

docker exec -it livrotdd ./vendor/bin/phpunit --colors tests